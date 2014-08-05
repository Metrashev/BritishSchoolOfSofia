<?php
ob_start();
require_once('../libCommon.php');
require_once(dirname(__FILE__).'/../../lib/fe/FormProcess.php');
//CUserRights::checkUserRights('admission');

$in_edit_table="admission";
$in_edit_id=(int)$_GET['id'];


?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
<?=BE_Utils::includeDefaultJs();?>
</head>
<body >
<form id='f1' method=POST  novalidate="novalidate">
<table class="main_table" align="center">
<tr>
<td>

<?php

include(dirname(__FILE__).'/controls.php');
$con=getadmissionControls();

$errors=array();

if(isset($_POST['btSave'])) {
	
	if($_POST['in_data']['student_status']==2 && $_POST['in_data']['unique_id']==0){
		$newId = date('y');
		$newId = $newId."00000";
		$newId += $in_edit_id;
		$_POST['in_data']['unique_id'] = $newId;
		$makeMedForm = getdb()->Execute("INSERT INTO medical_forms (student_id, s_first_name, s_family_name) VALUES ({$newId},'{$_POST['fields']['s_first_name']}','{$_POST['fields']['s_family_name']}')");
	}
	
	foreach($_POST['fields'] as $k=>$v){
		$_POST['in_data'][$k] = $v;
	}

	$wd=ControlValues::getWriteData($con,$_POST);
	$db=getdb();
	if (empty($wd['errors'])) {

		$ser = $_POST;
		unset($ser['in_data']);
		$wd['data']['serialized'] = serialize($ser);
		$n_id=ControlWriter::Write($in_edit_table,$wd['data'],$in_edit_id);

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
		$_POST = unserialize($array['in_data']['serialized']);

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
//if(USE_AUDIT_LOG&&$in_edit_id) {echo CUserLogs::renderLastRow($in_edit_table,$in_edit_id);}


require_once(dirname(__FILE__).'/'.'../../templates/formprocessor/translations.php');

$form_tr = $form_tr['bg'];
$required_tr = $required_tr['bg'];

ob_start();
include(dirname(__FILE__).'/'.'../../templates/formprocessor/form_be.tpl');
$str=ob_get_clean();
$str .= <<<EOD
</table>
</form>
EOD;

$fp=new FormProcessor();
$fp->loadTemplate($str);
$fp->autoProcessFields(true,true,true);

$fp->fillData($_POST);

echo $fp->getHTML();


echo "</td></tr></table>";
echo "</form></body></html>";

ob_end_flush();
?>