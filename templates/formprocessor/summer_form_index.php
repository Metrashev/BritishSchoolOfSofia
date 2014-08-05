<?php
require_once(dirname(__FILE__).'/translations.php');
$form_tr = $form_tr[LNG_CURRENT];
$required_tr = $required_tr[LNG_CURRENT];
$cid = (int)$_GET['cid'];
$db = getdb();
$getPeriods = $db->getRow("SELECT * FROM academic_year");
$isRequired = LNG_CURRENT==LNG_BG ? ' е задължително поле!' : ' is a required field!';
//$getConditions = $db->getRow("SELECT * FROM static_pages WHERE cid=34");
require_once(dirname(__FILE__).'/../../lib/fe/FormProcess.php');
require_once(dirname(__FILE__).'/../../lib/be/fe_utils.php');
require_once(dirname(__FILE__).'/../../lib/fe/CAntiSpam.php');

CFESession::start();
$fp=new FormProcessor();

ob_start();
include(dirname(__FILE__).'/summer_form.tpl');
$str = ob_get_clean();

$fp->loadTemplate($str);
$fp->autoProcessFields(true,true,true);

$fp->fillData($_POST);

$errors=array();
if(isset($_POST['btnSubmit'])) {
	$errors = $fp->validate();

	if(!isset($errors['spam_code']) && !CAntiSpam::checkCode($_POST['spam_code'])) {
		$errors['spam_code'] = $required_tr['invalid']." ".$required_tr['spam_code'];
	}

	if(!$_POST['terms']){
		$errors['no_terms'] = $required_tr['no_terms'];
	}

	if(empty($errors)) {
		$arr = $_POST;
		unset($arr['btnSubmit']);
		unset($arr['spam_code']);
		unset($arr['terms']);
		$submitTime = date("Y/m/d");

		foreach($arr as $k=>$v){
			$v = mysql_real_escape_string($v);
			$rows[] = $k;
			$values[] = "'".$v."'";
		}

		$rows = implode(',', $rows);
		$values = implode(',', $values);

		//$lang_type = LNG_CURRENT==LNG_BG ? '0' : '1';

		$insert = $db->Execute("INSERT INTO admission_summer ({$rows},submit_date) VALUES ({$values},'{$submitTime}')");

		if($insert){
			header("Location: /".LNG_CURRENT."/thankyou/");
		}
	}
}

if(!empty($errors)) {
	$str_errors=FE_Utils::renderErrors($errors);
}
else {
	$str_errors='';
}

$str = $fp->getHTML();
echo <<<EOD
	<p style="color:red;">$str_errors</p>
	$str
EOD;
?>