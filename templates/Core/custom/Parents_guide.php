<?php
$cid = (int)$_GET['cid'];
$db = getdb();
$lng = LNG_CURRENT;

if(isset($_SESSION['student_data'])){
	$getGuides = $db->getAll("SELECT * FROM parents_guide WHERE language=? AND class_type=?", array(LNG_CURRENT, $_SESSION['student_data']['class_type']));
	
	foreach($getGuides as $k=>$v){
		echo <<<EOD
			<div class="teacherDesc withHeight">
				<img src="/files/mf/parents_guide/{$v['id']}_picture_pic{$v['picture']}" class="portrait"/><br/>
				<h2>{$v['title']}</h2><br/>
				<p>{$v['due_date']}</p><br/>
				<p>{$v['body']}</p><br/>
			</div>
		
EOD;
}

} else {
	header("Location: /");
}
?>