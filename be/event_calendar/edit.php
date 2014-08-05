<?php
ob_start();
require_once('../libCommon.php');

$in_edit_table="event_calendar";
$in_edit_id=(int)$_GET['id'];


?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
	<?=BE_Utils::includeDefaultJs();?>
	<?=BE_Utils::loadTinyMce("upcoming_text,past_text","sp.tpl");?>
	<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery.datepick.min.js"></script>
    <link rel="stylesheet" href="/js/jquery.datepick.css" />
</head>
<body >
<form id='f1' method=POST enctype="multipart/form-data">
<table class="main_table" align="center">
<tr>
<td>

<?php

include(dirname(__FILE__).'/controls.php');
$con=getevent_calendarControls();

$errors=array();

$errors=array();
if(isset($_POST['btSave'])) {
	
	$wd=ControlValues::getWriteData($con,$_POST);
	
	$dates = array();
	
	if(empty($_POST['in_data']['dates'])) {
		$wd['errors']['dates'] = "Empty event calendar! Please select event dates!";
	}
	else{
	
		$dates = explode(",", $_POST['in_data']['dates']);
	
		foreach ($dates as $k=>$v) {
			$v = strtotime($v);
			if($v===false || $v==-1) {
				$wd['errors']['dates'] = "Invalid calendar date -> {$dates[$k]}!";
				break;
			}
			$dates[$k] = date('Y-m-d', $v);
		}
	}
	
	if( empty($dates) ) {
		$wd['errors']['dates'] = empty($wd['errors']['dates']) ? 'Empty event calendar' : $wd['errors']['dates'];
	}
	
	$db=getdb();
	
	if (empty($wd['errors'])) {
		
		$n_id=ControlWriter::Write($in_edit_table,$wd['data'],$in_edit_id);
		$errors+=ControlValues::processManagedImages($n_id,$_FILES,$con['controls']);
		
		if($in_edit_id) { //delete before update existing event_id dates
			$db->__query("DELETE FROM `calendar_dates` WHERE event_id='{$in_edit_id}'");
		}
		
		foreach ($dates as $v) {
			$db->__query("INSERT INTO `calendar_dates` SET event_id='{$n_id}', event_date='{$v}'");
		}
		
		if(empty($errors)) {
			header("Location: ?id={$n_id}&msg=1&bkp=".urlencode($_GET["bkp"]));
			//header("Location: ".($_GET['bkp']));
			exit;
		}
	}
	else {
		$errors=$wd['errors'];
	}
}

//$p=new Page();



if ($_SERVER['REQUEST_METHOD']=='GET') {
	if ($in_edit_id) {
		$db=getdb();
		$array['in_data']=$db->getRow("select * from {$in_edit_table} where id='{$in_edit_id}'");
		$array['in_data']['dates'] = $db->getOne("SELECT GROUP_CONCAT(event_date ORDER BY event_date ASC SEPARATOR ',') AS dates FROM `calendar_dates` WHERE event_id='{$in_edit_id}' GROUP BY event_id");
	}	
}
else {
	$array=$_POST;
}

FE_Utils::getGetMessage($errors);
if (!empty($errors)) {
	echo FE_Utils::renderErrors($errors);
	echo "<br />";
}

echo Master::create($con,$con['template']['dir'],$array);

echo "</td></tr></table>";
?>
 <script type="text/javascript">

 	var is_ctrlKeyActive = false;
	var cntDateRange = 0;

 	jQuery(document).ready(function($) {

    	$.datepick.setDefaults({dateFormat: 'yyyy-mm-dd'});
        
    	$("#datepicker").datepick({
            dateFormat: 'yyyy-mm-dd',
            monthsToShow: [3, 4],
            rangeSelect: false,
            multiSelect: 999,
            firstDay: 1,
            onSelect: function(dates){
            	
	           	if(!is_ctrlKeyActive) return;
	           	
	           	cntDateRange++;
           		if(cntDateRange == 2) {
           			cntDateRange = 1;
           			calculateSelectedRange();
           		}
        	}
        });

    	$("div.datePickerBox").on('click', 'a[href^="javascript"]', function(event){
			if(is_ctrlKeyActive) { event.preventDefault(); 	}			
        });

    	$("a#calendarReset").click(function(){
    		$("#datepicker").datepick('clear');
    		$("#datepicker").datepick('setDate', []);
        });	
        
		$('html, body').keydown(function(event) {
			if(event.ctrlKey && !is_ctrlKeyActive) { 
				is_ctrlKeyActive = true;
				cntDateRange = 0;
			}
		}).keyup(function(event){
			if(is_ctrlKeyActive) { 
				is_ctrlKeyActive = false;
				cntDateRange = 0;
			}
		});

		$('form#f1').submit(function(){
			$("input#datepicker_dates").val( getSelectedDates() );
			return true;
		});

		<? if( !empty($array['in_data']['dates']) ) { ?>
			setSelectedDates("<?=$array['in_data']['dates'];?>");
		<? } ?>
    });


 	function calculateSelectedRange() 
 	{
 		var dates = $("#datepicker").datepick('getDate');
    	var len = dates.length;
    	if(len<2) return;
    	
    	len--;
    	var endDate = new Date(dates[len]);
    	var startDate = new Date(dates[len-1]);
    
    	if( (endDate.getTime()-startDate.getTime()) == 0 ){
    		return;
    	}
    	
    	if( (endDate.getTime()-startDate.getTime()) < 0 ){ //swap
    		endDate = new Date(dates[len-1]);
    		startDate = new Date(dates[len]);
    	}
    	
    	startDate.setDate( startDate.getDate() + 1);
    	
    	if( (endDate.getTime()-startDate.getTime()) == 0 ){ return; }

    
    	while( endDate.getTime() > startDate.getTime() ) {
    		dates.push( new Date(startDate) );
    		startDate.setDate( startDate.getDate() + 1);
    	}
    	
    	$("#datepicker").datepick('clear');
    	$("#datepicker").datepick('setDate', dates);
 	 }

	 function getSelectedDates() {

		var dates = $("#datepicker").datepick('getDate');
		var i=0, result=[], len=dates.length;
		
		if(len == 0) return '';

		for(i=0; i<len; i++) {
			result[i] = $.datepick.formatDate(dates[i]);
		}

		return result.join(",");
	 }

	 function setSelectedDates(str_dates) {

		if(str_dates == '') return;
		 
		var dates = str_dates.split(",");
	
		if(dates.length == 0) return;

		$("#datepicker").datepick('clear');
		$("#datepicker").datepick('setDate', dates);		
	 }
    
    </script>
<?php
echo "</form></body></html>";

ob_end_flush();
?>