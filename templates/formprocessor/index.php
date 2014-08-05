<?php
require_once(dirname(__FILE__).'/translations.php');
$form_tr = $form_tr[LNG_CURRENT];
$required_tr = $required_tr[LNG_CURRENT];
$cid = (int)$_GET['cid'];
$db = getdb();
$getConditions = $db->getRow("SELECT * FROM static_pages WHERE cid=34");

if(isset($_POST['btLoad'])){
	unset($_POST['btLoad']);
	$sId = (int)$_POST['unique_id'];
	$pEmail = $_POST['p_email'];
	if(!$pEmail){
		$noEmail = <<<EOD
					<p style="color:red;">{$form_tr['no_such_email']}</p>
EOD;
	} else if($sId<=0){
		$noId = <<<EOD
				<p style="color:red;">{$form_tr['no_such_id']}</p>
EOD;
	} else {
		$getMatch = $db->getRow("SELECT * FROM admission WHERE unique_id={$sId} ORDER BY date_submited DESC");
		if($getMatch){
			$matchEmail = unserialize($getMatch['serialized']);
			$cLng = LNG_CURRENT==LNG_BG ? '0' : '1';
			if($getMatch['lang_type']!=$cLng){
				$lngMsg = $cLng==0 ? 'Формата на '.$matchEmail['fields']['s_first_name'].' е създадена в английската версия на сайта, моля попълнете заявката <a href="/en/addmission/?option=old">там.</a>' : 'The admission form of '.$matchEmail['fields']['s_first_name'].' has been made in the Bulgarian version of the web page, please make the resubmission <a href="/bg/addmission/?option=old">there.</a>';
				$wrongLng = <<<EOD
					<p style="color:red; display:block;">{$lngMsg}</p>
EOD;
			} else if($matchEmail['father']['f_email']==$pEmail || $matchEmail['mother']['m_email']==$pEmail || $matchEmail['guardian']['g_email']==$pEmail ){
				$_POST = $matchEmail;
				$_POST['fields']['unique_id'] = $sId;
				$_POST['fields']['student_status'] = 1;
				if($matchEmail['father']['f_email']){$_POST['f_det']=1;}
				if($matchEmail['mother']['m_email']){$_POST['m_det']=1;}
				if($matchEmail['guardian']['g_email']){$_POST['g_det']=1;}
				$_POST['btLoad'] = 'Yes';
			} else {
				$noEmail = <<<EOD
					<p style="color:red;">{$form_tr['no_such_email']}</p>
EOD;
			}
			
		} else {
			$noId = <<<EOD
					<p style="color:red;">{$form_tr['no_such_id']}</p>
EOD;
		}
	}
}

if(!$_GET['option']){
	echo <<<EOD
<div class="rules applyForm">
	<h1>{$getConditions['title_'.LNG_CURRENT]}</h1>
	<p>{$getConditions['body_'.LNG_CURRENT]}</p>
	<div class="applyForm newStudent">
	<a href="?option=new" style="color:#0E2486;">{$form_tr['for_new']}</a>
	</div>
	<div class="applyForm oldStudent">
	<a href="?option=old" style="color:#0E2486;" >{$form_tr['for_old']}</a>
	</div>

</div>
EOD;
return;
} 

if($_GET['option']=='old' && !isset($_POST['btLoad']) && !isset($_POST['btnSubmit'])){
	if($_COOKIE['existing']){
		setcookie('existing',0,time()-60,'/');
		unset($_COOKIE['existing']);
		$existing = <<<EOD
			<p style="color:red; display:block;">{$required_tr['existing_row']}</p>
EOD;
	}
echo <<<EOD
<form method="post">
<table cellspacing="0" cellpadding="0" border="0" class="applyFormTbl" style="width:100%; margin-bottom:20px;">
<colgroup>
	<col width="50%" />
	<col width="50%" />
</colgroup>
<tr><th class="thSpan" colspan="2"><div>{$form_tr['for_current_students']}</div></th></tr>
<tr>
	<td class="td1" colspan="2">
	{$wrongLng}{$existing}{$noId}<br/>{$noEmail}
	</td>
</tr>
<tr>
	<td class="td1" colspan="2" style="font-style:italic;">{$form_tr['please_fill']}</td>
</tr>
<tr>
	<td class="td1" style="padding-top:10px;">
		<label for="p_email">{$form_tr['email']}:</label><br />
		<input type="text" name="p_email" id="p_email" required="true"/>
	</td>
	<td class="td2" style="padding-top:10px;">
		<label for="unique_id">{$form_tr['unique_id']}:</label><br />
		<input type="text" name="unique_id" id="unique_id" required="true" />
	</td>
</tr>
<tr>
	<td class="td1" colspan="2" style="text-align:center;">
		<input type="submit" name="btLoad" value="{$form_tr['load_student']}"/>
	</td>
</tr>
</table>
</form>
EOD;
return;
}
require_once(dirname(__FILE__).'/../../lib/fe/FormProcess.php');
require_once(dirname(__FILE__).'/../../lib/be/fe_utils.php');
require_once(dirname(__FILE__).'/../../lib/fe/CAntiSpam.php');

CFESession::start();
	
	if($_POST['fields']['transport']=='no'){
		unset($_POST['serialized']['transport_type']);
	}
	$fp=new FormProcessor();
	ob_start();
	include(dirname(__FILE__).'/form.tpl');
	
	$str=ob_get_clean();

	$fp->loadTemplate($str);
	$fp->autoProcessFields(true,true,true);

	$fp->fillData($_POST);

	$errors=array();
	if(isset($_POST['btnSubmit'])) {
		if($_GET['option']=='old'){
			$checkYear = $_POST['fields']['academic_year'];
			$checkDb = $db->getOne("SELECT id FROM admission WHERE unique_id=? AND academic_year=?", array($_POST['fields']['unique_id'],$checkYear));
			if($checkDb){
				setcookie('existing',1,time()+60,'/');
				header("Location: /".LNG_CURRENT."/addmission/?option=old");
				exit();
			}
		}
				
		$errors = $fp->validate();

		if(!isset($errors['spam_code']) && !CAntiSpam::checkCode($_POST['spam_code'])) {
			$errors['spam_code'] = $required_tr['invalid']." ".$required_tr['spam_code'];
		}

		if(!$_POST['f_det'] && !$_POST['m_det'] && !$_POST['g_det']){
			$errors['no_parents'] = $required_tr['no_parents'];
		}

		if(!$_POST['terms']){
			$errors['no_terms'] = $required_tr['no_terms'];
		}

		$parDetails = array('f'=>'father','m'=>'mother','g'=>'guardian');
		foreach($parDetails as $k=>$v){
			if(!$_POST[$k.'_det']){
				unset($errors[$k.'_name']);
				unset($errors[$k.'_family_name']);
				unset($errors[$k.'_mobile_phone']);
				unset($errors[$k.'_email']);
			}
		}

		//var_dump($_POST);

		if(empty($errors)) {
				$serData = array();
				$arr = $_POST;
				unset($arr['btnSubmit']);
				unset($arr['spam_code']);
				$submitTime = date("Y-m-d");

				if(!$arr['fields']['transport']){
					$arr['fields']['transport'] = '0';
				}

				foreach($arr['fields'] as $k=>$v){
					$v = mysql_real_escape_string($v);
					$rows[] = $k;
					$values[] = "'".$v."'";
				}

				$rows = implode(',', $rows);
				$values = implode(',', $values);

				$serData = serialize($arr);
				
				$lang_type = LNG_CURRENT==LNG_BG ? '0' : '1';
				
				$insert = $db->Execute("INSERT INTO admission ({$rows},date_submited,serialized,lang_type) VALUES ({$values},'{$submitTime}','{$serData}','{$lang_type}')");

				if($insert){
					header("Location: /".LNG_CURRENT."/thankyou/");
					exit();
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

