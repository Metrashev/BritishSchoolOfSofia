<?php
$cid = (int)$_GET['cid'];
$db = getdb();
$lng = LNG_CURRENT==LNG_BG ? '' : '_en';

if(isset($_SESSION['student_data'])){
	$getTeachers = $db->getAll(
			"SELECT DISTINCT teachers.* FROM classes INNER JOIN subject_assignment ON classes.id=subject_assignment.class_id 
			INNER JOIN teachers ON subject_assignment.teacher_id=teachers.id WHERE class_type={$_SESSION['student_data']['class_type']}");
	foreach($getTeachers as $k=>$v){
		echo <<<EOD
			<div class="teacherDesc withHeight">
				<a name="{$v['name'.$lng]}"></a>
				<img src="/files/mf/teachers/{$v['id']}_photo_pic{$v['photo']}" class="portrait"/>
				<h2>{$v['name'.$lng]}</h2>
				{$v['full_description'.$lng]}
			</div>
EOD;
	}
} else {
	header("Location: /");
}
?>