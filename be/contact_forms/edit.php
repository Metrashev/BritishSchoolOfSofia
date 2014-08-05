<?php
ob_start();
require_once('../libCommon.php');
$db=getdb();
require_once(dirname(__FILE__).'/../../lib/be/fe_utils.php');
$in_edit_table="contact_forms";
$in_edit_id=(int)$_GET['id'];


?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
<?=BE_Utils::includeDefaultJs();?>
<?=BE_Utils::loadTinyMce("answer_msg","sp.tpl");?>
</head>
<body >
<form id='f1' method=POST>
<table class="main_table" align="center">
<tr>
<td>

<?php

include(dirname(__FILE__).'/controls.php');
$con=getcontact_formsControls();

$errors=array();

if(isset($_POST['sendMsg'])){

	if(!$_POST['in_data']['subject']){
		$errs[] = 'You have to fill "Subject"';
	}
	if(!$_POST['in_data']['answer_msg']){
		$errs[] = 'You have to fill "Answer"';
	}
	if(!$_POST['in_data']['email']){
		$errs[] = 'There is no email provided to send the answer';
	}

	if(!$errs){
		$mail['to'] = $_POST['in_data']['email'];
		$mail['subject'] = $_POST['in_data']['subject'];
		$mail['body'] = <<<EOD
			{$_POST['in_data']['answer_msg']}
EOD;
			$res = FE_Utils::send_mail($mail);
			if($res){
				$_POST['in_data']['status'] = 1;
			}

	} else {
		$errs = implode('<br/>', $errs);
	}

}

if(isset($_POST['btSave']) || isset($_POST['sendMsg'])) {

	$wd=ControlValues::getWriteData($con,$_POST);	
	
	if (empty($wd['errors'])) {
/*
		$order=$wd['data']['order_field'];
		unset($wd['data']['order_field']);
		if(!$in_edit_id) {
			$order=(int)$order;
		}
*/

/*
		if(!$in_edit_id) {
			$wd['data']['created_date']=date('Y-m-d H:i:s');
			$wd['data']['created_by']=Users::getUserId();
		}
		$wd['data']['updated_date']=date('Y-m-d H:i:s');
		$wd['data']['updated_by']=Users::getUserId();
*/
		$n_id=ControlWriter::Write($in_edit_table,$wd['data'],$in_edit_id);
		//if(USE_AUDIT_LOG) {	CUserLogs::logOperation($in_edit_table,$n_id,(int)$in_edit_id?OPERATION_UPDATE:OPERATION_ADD);	}
	
	/*if((string)$order!="") {
		$co=new COrder($in_edit_table,"order_field",);
		$co->set_item_order($n_id,$order);
	}*/
	
		//$errors+=ControlValues::processManagedImages($n_id,$_FILES,$con['controls']);
		//$errors+=ControlValues::processManagedFiles($n_id,$_FILES,$con['controls']);
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
echo $errs;
echo Master::create($con,$con['template']['dir'],$array);
//if(USE_AUDIT_LOG&&$in_edit_id) {echo CUserLogs::renderLastRow($in_edit_table,$in_edit_id);}

echo "</td></tr></table>";
echo "</form></body></html>";

ob_end_flush();
?>