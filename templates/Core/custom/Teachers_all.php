<?php
$cid = (int)$_GET['cid'];
$db = getdb();
$lng = LNG_CURRENT==LNG_BG ? '' : '_en';

$WHERE = '';
if($cid==97){
	$WHERE = ' AND bkg ';
} else if($cid==100){
	$WHERE = ' AND bcs ';
} else if($cid==103){
	$WHERE = ' AND bcs ';
}

$getTeachers = $db->getAll("SELECT teachers.* FROM teachers WHERE 1 ".$WHERE);

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