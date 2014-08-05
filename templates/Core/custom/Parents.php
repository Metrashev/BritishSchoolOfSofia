<?php
require_once(dirname(__FILE__).'/../../formprocessor/translations.php');
$form_tr = $form_tr[LNG_CURRENT];
$required_tr = $required_tr[LNG_CURRENT];
$cid = (int)$_GET['cid'];
$link_lng = LNG_CURRENT;
$lng = LNG_CURRENT==LNG_BG ? '' : '_en';
$nameLng = LNG_CURRENT==LNG_BG ? 'name_bg' : 'name_en';
$db = getdb();

if(isset($_SESSION['student_data'])){
	$cnt = 0;
	$teacher_subject = array();
	$getClassData = $db->getRow("SELECT * FROM classes WHERE class_type={$_SESSION['student_data']['class_type']} AND paralelka='{$_SESSION['student_data']['paralelka']}'");
	$getMainTeacher = $db->getRow("SELECT * FROM teachers WHERE id='{$getClassData['main_teacher']}'");
	$img = "<img src='/files/mf/classes/{$getClassData['id']}_photo_pic{$getClassData['photo']}' style='width:540px; text-align:center;' />";
	
	$getSubjectNames = $db->getAssoc("SELECT id, {$nameLng} FROM subject_names ");
	$getSubjects = $db->getAll("SELECT * FROM subjects WHERE class_type={$_SESSION['student_data']['class_type']}");
	
	foreach($getSubjects as $k=>$v){
		if($cnt==1){
			$teacher_subject[] = "</tr><tr>";
			$cnt = 0;
		}
		$getTeacher = $db->getRow(
				"SELECT teachers.* FROM subjects INNER JOIN subject_assignment ON subjects.id=subject_assignment.subject_id
				INNER JOIN teachers ON subject_assignment.teacher_id=teachers.id WHERE subjects.id={$v['id']}");
		$teacher_subject[] = <<<EOD
			<td class="td_{$cnt}">
				<p><a href="/{$link_lng}/subjects/#{$getSubjectNames[$v['name']]}">{$getSubjectNames[$v['name']]}</a>: <span>
				   <a href="/{$link_lng}/teachers/#{$getTeacher['name'. $lng]}">{$getTeacher['name'.$lng]}</a></span></p>
			</td>	
EOD;
		$cnt++;
	}
	
	$teacher_subject = implode('',$teacher_subject);
	
	echo <<<EOD
		{$img}<br/>
		<table cellspacing="0" cellpadding="0" class="teachers">
			<tr><td colspan="2"><p>{$form_tr['main_teacher']}: <span class="tName"><a href="/{$link_lng}/teachers/#{$getMainTeacher['name'. $lng]}">{$getMainTeacher['name'.$lng]}</a></span></p></td></tr>
			<tr>{$teacher_subject}</tr>
		</table>
EOD;
	return;
} 

if(!isset($_SESSION['student'])){

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
			$getMatch = $db->getRow("SELECT * FROM admission WHERE unique_id=? ORDER BY date_submited DESC", array($sId));
			if($getMatch){
				$matchEmail = unserialize($getMatch['serialized']);
				
				$lang = $getMatch['lang_type']==1 ? LNG_EN : LNG_BG;
				
				if($matchEmail['father']['f_email']==$pEmail || $matchEmail['mother']['m_email']==$pEmail || $matchEmail['guardian']['g_email']==$pEmail ){
					CFESession::start();
					$_SESSION['student_data']['isLogged'] = 1;
					$_SESSION['student_data'] = $getMatch; 
					if($matchEmail['father']['f_email']==$pEmail){
						$_SESSION['student_data']['parent'] = $matchEmail['father']['f_firstname']." ".$matchEmail['father']['f_family_name'];
					} elseif($matchEmail['mother']['m_email']==$pEmail){
						$_SESSION['student_data']['parent'] = $matchEmail['mother']['m_firstname']." ".$matchEmail['mother']['m_family_name'];
					} else {
						$_SESSION['student_data']['parent'] = $matchEmail['guardian']['g_firstname']." ".$matchEmail['guardian']['g_family_name'];
					}
					$path = SEUrls::getUrlPathForCid($cid);
					if(LNG_CURRENT!=$lang){
						if($lang == DEFAULT_LANGUAGE) {
							$path = substr($path, 3);
						} else {
							$path = '/'.$lang.$path;
						}
					}
					
					header('Location: '.$path);
					exit();
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
	echo <<<EOD
	<form method="post">
	<table cellspacing="0" cellpadding="0" border="0" class="applyFormTbl" style="width:100%; margin-bottom:20px;">
	<colgroup>
		<col width="50%" />
		<col width="50%" />
	</colgroup>
	<tr><th class="thSpan" colspan="2"><div>{$form_tr['info_for_parents']}</div></th></tr>
	<tr>
		<td class="td1" colspan="2">
		{$wrongLng}{$existing}{$noId}<br/>{$noEmail}
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2" style="font-style:italic;">{$form_tr['please_fill_parents']}</td>
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
			<input type="submit" name="btLoad" value="{$form_tr['login']}"/>
		</td>
	</tr>
	</table>
	</form>
EOD;
} 
?>
