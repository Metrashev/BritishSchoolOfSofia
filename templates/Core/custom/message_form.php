<?php
$contact_tr = array(
	'bg'=> array(
		'choose_type'=>'Моля изберете тема',
		'form'=>'Форма',
		'parent_name'=>'Име на родителя',
		'email'=>'Имейл',
		'phone'=>'Телефон за контакт',
		'child_name'=>'Име на ученика',
		'grade'=>'Клас на ученика',
		'message'=>'Съобщение',
		'antispam'=>'Анти-спам код',
		'generate_new_code'=>'Генерирай нов код',
		'send'=>'Изпрати',
		'please_fill'=>'Моля попълнете',
		'invalid_email'=>'Невалиден имейл!',
		'msg_type'=>'Тема',
		'thank_you'=>'Благодарим ви за съобщението!',
	),
	'en'=> array(
		'choose_type'=>'Please choose topic',
		'form'=>'Form',
		'parent_name'=>'Parent name',
		'email'=>'Email',
		'phone'=>'Contact phone',
		'child_name'=>'Student name',
		'grade'=>'Student grade',
		'message'=>'Message',
		'antispam'=>'Anti-spam code',
		'generate_new_code'=>'Generate new code',
		'send'=>'Send',
		'please_fill'=>'Please fill',
		'invalid_email'=>'Invalid email!',
		'msg_type'=>'Topic',
		'thank_you'=>'Thank you for your message!',
	),		
);
$contact_tr = $contact_tr[LNG_CURRENT];
require_once(dirname(__FILE__).'/../../../lib/be/fe_utils.php');
require_once(dirname(__FILE__).'/../../../lib/fe/CAntiSpam.php');
CFESession::start();
$db = getdb();
$getTitle = $db->getRow("SELECT * FROM static_pages WHERE cid=95");

$emailPattern = '|^[^ ,;@]+@([a-z0-9][a-z0-9-]*\.)+[a-z]{2,6}$|i';

if(isset($_POST['doSubmit'])){

	if(!$_POST['message_type']){
		$errors[] = $contact_tr['please_fill'].' "'.$contact_tr['msg_type'].'"!';
	}
	
	if(!$_POST['parent_name']){
		$errors[] = $contact_tr['please_fill'].' "'.$contact_tr['parent_name'].'"!';
	}
	
	if(!$_POST['email']){
		$errors[] = $contact_tr['please_fill'].' "'.$contact_tr['email'].'"!';
	}
	
	if(!preg_match($emailPattern, $_POST['email'])) {
		$errors[] = $contact_tr['invalid_email'];
	}

	if(!$_POST['phone']){
		$errors[] = $contact_tr['please_fill'].' "'.$contact_tr['phone'].'"!';
	}
	
	if(!CAntiSpam::checkCode($_POST['antispam'])) {
		$errors[]='Invalid anti spam code!';
	}
	
	if(empty($errors)){
		$_POST['parent_name'] = htmlspecialchars($_POST['parent_name']);
		$_POST['email'] = htmlspecialchars($_POST['email']);
		$_POST['phone'] = htmlspecialchars($_POST['phone']);
		$_POST['child_name'] = htmlspecialchars($_POST['child_name']);
		$_POST['email'] = htmlspecialchars($_POST['email']);
		$_POST['phone'] = htmlspecialchars($_POST['phone']);
		$_POST['message'] = htmlspecialchars($_POST['message']);
		$_POST['message'] = nl2br($_POST['message']);

		$submitTime = date("Y-m-d");
		
		unset($_POST['doSubmit']);
		unset($_POST['antispam']);
		foreach($_POST as $k=>$v){
			$v = mysql_real_escape_string($v);
			$fields[] = $k;
			$values[] = "'".$v."'";
		}
		$fields = implode(',', $fields);
		$values = implode(',', $values);
				
		$insert = $db->Execute("INSERT INTO contact_forms ({$fields},submit_time) VALUES ({$values},'{$submitTime}')");	
		$_SESSION[CAntiSpam::$session_var] = '';
		unset($_SESSION[CAntiSpam::$session_var]);
		header('Location: /'.LNG_CURRENT.'/contact_form/&ok=1');
		exit;
	}
}

if($errors){
	$errors = implode('<br />', $errors);
}

$_SESSION[CAntiSpam::$session_var]=CAntiSpam::generateCode();


if($_SERVER['REQUEST_METHOD']=='GET' && (int)$_GET['ok']==1){
	echo <<<EOD
		<div class="rules">
			<p class="spSubTitle">{$contact_tr['thank_you']}</p>
		</div>
EOD;
	return;
}
?>
		<div class="rules">
			<h1><?=$getTitle['title_'.LNG_CURRENT]?></h1>
			<p><?=$getTitle['body_'.LNG_CURRENT]?></p>
		</div>
				
		<form method="post" novalidate="novalidate" id="contactForm">
			<table cellspacing="0" cellpadding="0" class="applyFormTbl contact">
			<colgroup>
				<col width="50%" />
				<col width="50%" />
			</colgroup>
				<tr><th class="thSpan" colspan="2"><div><?=$contact_tr['form']?></div></th></tr>
				<tr>
					<td class="td1" colspan="2">
						<div class="errors">
							<?=$errors;?>
						</div>
					</td>
				</tr>
				<tr>
					<td class="td1">
						<label><?=$contact_tr['parent_name']?>:<b>*</b></label>
						<input type="text" name="parent_name" value="<?=htmlspecialchars($_POST['parent_name'])?>" >
					</td>
					<td class="td2">
						<label><?=$contact_tr['email']?>:<b>*</b></label>
						<input type="text" name="email" value="<?=htmlspecialchars($_POST['email'])?>" >
					</td>
				</tr>
				<tr>
					<td class="td1">	
						<label><?=$contact_tr['phone']?>:<b>*</b></label>
						<input type="text" name="phone" value="<?=htmlspecialchars($_POST['phone'])?>" />		
					</td>
					<td class="td2">
						<label><?=$contact_tr['child_name']?>:</label>
						<input type="text" name="child_name" value="<?=htmlspecialchars($_POST['child_name'])?>" />
					</td>
				</tr>
				<tr>
					<td class="td1">
						<label><?=$contact_tr['grade']?>:</label><br/>
						<select name="grade" value="<?=$_POST['grade']?>">
					<?php
						foreach($GLOBALS['class_type'] as $k=>$v){
							echo "<option value='".$k."'>".$v."</option>";
						}	
					?>
						</select>						
					</td>
					<td class="td2">
						<label><?=$contact_tr['choose_type']?><b>*</b></label><br/>
						<select name="message_type" value="<?=$_POST['message_type']?>">
					<?php 
						foreach($GLOBALS['msg_topic'][LNG_CURRENT] as $k=>$v){
							echo "<option value='".$k."'>".$v."</option>";
						}
					?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="td1" colspan="2">
						<label><?=$contact_tr['message']?>:</label><br/>
						<textarea name="message" value="<?=htmlspecialchars($_POST['message'])?>" rows="6" ></textarea>
					</td>
				</tr>
				<tr>
					<td class="td1">
						<img src="/image_test.php?t=1" id="spamImg" style="border:1px solid #E3E9EF; width:218px;"/>
					</td>
					<td class="td2">	
						<label><?=$contact_tr['antispam']?>:<b>*</b></label>					
						<input type="text" name="antispam" style="width:100px; height:15px; font-size:13px;">
						<a onclick="changeSrc(document.getElementById('spamImg'));" style="cursor:pointer; color:grey;"><?=$contact_tr['generate_new_code']?></a>
					</td>
				</tr>
				<tr>
					<td class="td1" colspan="2" style="text-align:center;padding:30px 0 30px 0;">
						<input type="submit" name="doSubmit" id="doSubmit" value="<?=$contact_tr['send']?>" style="cursor:pointer; width:100px; height:30px;"/>
					</td>
				</tr>
			</table>
		</form>
		
		<script type="text/javascript">
			function changeSrc(obj) {
				var src = obj.src.split('=');
				src = src[0] + '=' + (parseInt(src[1])+1);
				obj.src = src;
			}
		</script>