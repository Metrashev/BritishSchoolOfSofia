<?php

require_once(dirname(__FILE__).'/../../formprocessor/translations.php');
$form_tr = $form_tr[LNG_CURRENT];
$required_tr = $required_tr[LNG_CURRENT];
$cid = (int)$_GET['cid'];
$of = LNG_CURRENT==LNG_BG ? 'на' : 'of';
$lng = LNG_CURRENT;
$nameLng = LNG_CURRENT==LNG_BG ? 'name_bg' : 'name_en';
if(LNG_CURRENT==LNG_BG){
	$week = <<<EOD
		<th>Час</th>
		<th>Понеделник</th>
		<th>Вторник</th>
		<th>Сряда</th>
		<th>Четвъртък</th>
		<th>Петък</th>		
EOD;
} else {
	$week = <<<EOD
		<th>Length</th>
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
EOD;
}

$db = getdb();
if(isset($_SESSION['student_data'])){
	$getSubjectNames = $db->getAssoc("SELECT id, {$nameLng} FROM subject_names");
	//var_dump($getSubjectNames);
	$getProgram = $db->getRow("SELECT * FROM classes WHERE class_type={$_SESSION['student_data']['class_type']} AND paralelka={$_SESSION['student_data']['paralelka']}");
	$programa = unserialize($getProgram['programa']);
	$days = array();
	if($_SESSION['student_data']['class_type']>2){
		$breaks = $GLOBALS['class_breaks']['grades'];
		foreach($GLOBALS['class_length']['grades'] as $k=>$v){
			$days[$k] .= <<<EOD
			<td>{$k} class<br/>{$v}</td>
EOD;
		}	
	} else {
		$breaks = $GLOBALS['class_breaks']['nursery'];
		foreach($GLOBALS['class_length']['nursery'] as $k=>$v){
			$days[$k] .= <<<EOD
			<td>{$k} class<br/>{$v}</td>
EOD;
		}
	}
	
	foreach($programa as $k=>$e){
		foreach($e as $id=>$val){
			$val = is_array($val) ? implode(',', $val) : $val;
			$getSubjName = $db->getCol("SELECT name FROM subjects WHERE FIND_IN_SET(id, ?)", array($val));
			foreach ($getSubjName as $k1=>$v1) {
				$getSubjName[$k1] = <<<EOD
				<a href="/{$lng}/subjects/#{$getSubjectNames[$v1]}">{$getSubjectNames[$v1]}</a>
EOD;
			}
			$days[$k] .= '<td style="padding: 0 5px;">'.implode('<br />', $getSubjName).'</td>';
		}
	}
	
} else {
	header("Location: /");
	exit();
}
?>

<table cellspacing="0" cellpadding="3" class="scheduleTable">
<colgroup span="6">
<col width="10%">
<col width="18%">
<col width="18%">
<col width="18%">
<col width="18%">
<col width="18%">
</colgroup>
<tbody>
	<tr><td colspan="6"><h2><?=$form_tr['schedule']?> <?=$GLOBALS['class_type'][$_SESSION['student_data']['class_type']]?> <?=$of?> <?=$_SESSION['student_data']['s_first_name']?> <?=$_SESSION['student_data']['s_family_name']?></h2></td></tr>
	<tr><?=$week?></tr>
	<tr>
<?php 
foreach($days as $k=>$td){
	if(isset($breaks[$k])){
		echo <<<EOD
			<td class="break">{$breaks[$k]}</td>
			<td class="break" colspan="5">break</td></tr><tr>
EOD;
	}
	echo $td."</tr><tr>";
}
?>
	</tr>
</tbody>
</table>