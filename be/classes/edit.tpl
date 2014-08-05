<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Classes</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				<div>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Edit</td>
					<td align="right">				<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
				</tr>
			</table>
		</div> </div></td></tr>
</table>

<table cellpadding="5" cellspacing="0" class="table" align="left">
<colgroup span="4">
<col width='20%'>
<col width='30%'>
<col width='40%'>
<col width='10%'>
</colgroup>
<tbody>
<tr>
<td></td>
<td class='td1' style="vertical-align: top;" >
	<label onclick="document.getElementById('class_type').focus();">Class type</label>
	<ITTI field_name='class_type' style="margin-left: 10px; margin-bottom: 10px"></ITTI>
	<label for="photo" style="margin-bottom: 5px">Photo</label>
	<ITTI field_name='photo' style="width: 243px"></ITTI>
</td>
<td class='td2' style="vertical-align:top;">
	<label onclick="document.getElementById('paralelka').focus();">Class</label>
	<ITTI field_name='paralelka' style="margin-left: 10px; margin-bottom: 10px; width:166px;"></ITTI><br/>
	<label onclick="document.getElementById('main_teacher').focus();">Main teacher</label>
	<ITTI field_name='main_teacher' style="margin-left: 10px; margin-bottom: 10px; width:166px;"></ITTI><br/>
	<?php 
if(isset($GLOBALS['OriginalRow'])){
	$sbjNames = getdb()->getAssoc("SELECT id, name_bg FROM subject_names");
	$subjects = getdb()->getAll("SELECT * FROM subjects WHERE class_type=?", array($GLOBALS['OriginalRow']['class_type']));
	$teachers = array(''=>'')+getdb()->getAssoc('SELECT id, name FROM teachers');
	foreach ($subjects as $subject){
		$val = getdb()->getOne("SELECT teacher_id FROM subject_assignment WHERE class_id=? AND subject_id=?", array($GLOBALS['OriginalRow']['id'], $subject['id']));	
		$Options = CSelectOptionsRenderer::renderOptions($val, $teachers);
		echo <<<EOD
	<label>{$sbjNames[$subject['name']]}:</label> <select style="margin-left: 10px; margin-bottom: 10px; width: 165px;" class="subjectSelect" name="daskal[{$subject['id']}]">$Options</select>
EOD;
	}
}

?>
</td>

</td>
</tr>
<tr>
<td class="td1" colspan="4">
	<div style="border: 1px solid #999; border-radius:5px; padding:3px; margin:10px 0;">
	<h2 style="display:block; margin:2px 0 10px 0;">Учебна програма: </h2>
	<table cellspacing="0" cellpadding="4" style="width:100%;" class="scheduleTable">
		<tr>
			<th>Length</th>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
		</tr>
		<tr>
<?php
if($GLOBALS['OriginalRow']['class_type']>2){
	$hours_version = 'grades';
} else {
	$hours_version = 'nursery';
}
$hours = "<td>";
for($h=1; $h<11; $h++){
	$hours .= <<<EOD
		<input type="text" disabled value="{$GLOBALS['class_length'][$hours_version][$h]}" class="studentProgram"/><br/>
EOD;
}
$hours .= "</td>";
echo $hours;

$SubjectOptions = getdb()->getAssoc("SELECT subject_id,subject_id FROM subject_assignment WHERE class_id=?", array($GLOBALS['OriginalRow']['id']));

foreach ($SubjectOptions as $k=>$v) {
	$getSubjName = getdb()->getOne("SELECT name FROM subjects WHERE id={$k}");
	$SubjectOptions[$k] = $sbjNames[$getSubjName];
}

$SubjectOptions = array(''=>'')+$SubjectOptions;
for($i=1; $i<6; $i++){
	$day = "<td>";
	for($p=1; $p<11; $p++) {
		
		if(!is_array($_POST['programa'][$p][$i])) {
			$_POST['programa'][$p][$i] = array(1=>$_POST['programa'][$p][$i], 2=>'');
		}

		$options1 = CSelectOptionsRenderer::renderOptions($_POST['programa'][$p][$i][1], $SubjectOptions);
		$options2 = CSelectOptionsRenderer::renderOptions($_POST['programa'][$p][$i][2], $SubjectOptions);
		$day .= <<<EOD
		<div style="border: 1px solid">
			<label>Class {$p}.1:</label><select style="width:140px;" name="programa[{$p}][{$i}][1]">{$options1}</select><br/>
			<label>Class {$p}.2:</label><select style="width:140px;" name="programa[{$p}][{$i}][2]">{$options2}</select>
		</div>
EOD;
}
	$day .= "</td>";
	echo $day;
	$day = '';
}
?>		
		</tr>
	</table>
</td>
</tr>
	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" />
	</td></tr>
</tbody></table>

