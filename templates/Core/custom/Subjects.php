<?php
require_once(dirname(__FILE__).'/../../formprocessor/translations.php');
$form_tr = $form_tr[LNG_CURRENT];
$required_tr = $required_tr[LNG_CURRENT];
$cid = (int)$_GET['cid'];
$db = getdb();
$link_lng = LNG_CURRENT;
$lng = LNG_CURRENT==LNG_BG ? '' : '_en';
$nameLng = LNG_CURRENT==LNG_BG ? 'name_bg' : 'name_en';
if(isset($_SESSION['student_data'])){
	$getSubjectNames = $db->getAssoc("SELECT id, {$nameLng} FROM subject_names");
	$getSubjects = $db->getAll("SELECT * FROM subjects WHERE class_type={$_SESSION['student_data']['class_type']} AND invisible=0");
	
	foreach($getSubjects as $k=>$v){
		if($v['image']) {
			$image = <<<EOD
			<img src="/files/mf/subjects/{$v['id']}_image_pic{$v['image']}" class="ImgLeft"/>
EOD;
		}
		$getTeacher = $db->getRow(
				"SELECT teachers.* FROM subjects INNER JOIN subject_assignment ON subjects.id=subject_assignment.subject_id
				 INNER JOIN teachers ON subject_assignment.teacher_id=teachers.id WHERE subjects.id={$v['id']}");
		
		$v['description_en']=str_replace("{#IMAGE#}", $image, $v['description_en']);
		
		echo <<<EOD
			<div class="teacherDesc">
				<a name="{$getSubjectNames[$v['name']]}"></a>
				<h2 class="toggleInfo" style="background: url('/i/footerArrow.png') no-repeat 0 50%; padding-left:24px; cursor:pointer;">{$getSubjectNames[$v['name']]}</h2>
				<div class="subjDesc" >
					<div class="subjectsDescription">
						{$v['description_en']}
					</div>
				</div>
				<a href="/{$link_lng}/teachers/#{$getTeacher['name']}" class="teacher_link">{$form_tr['teacher']}: {$getTeacher['name'.$lng]}</a>
				<div class="subjDesc" >
					<div style="padding-top:20px;">
					<img src="/files/mf/teachers/{$getTeacher['id']}_photo_pic{$getTeacher['photo']}" class="portrait"/>
					{$getTeacher['full_description'.$lng]}
					</div>
				</div>
				
			</div>
EOD;
	}
} else {
	header("Location: /");
	exit();
}
?>
<script type="text/javascript">

$(document).ready(function(){
	$('h2.toggleInfo').click(function(){
		$(this).parent().find('div.subjDesc').slideToggle(400, function(){});
	});

	var hash = window.location.hash;
	if(hash) {
		hash = hash.replace('#','')
		$("a[name='"+hash+"']").parent().find('h2.toggleInfo').click();
	}
});
</script>