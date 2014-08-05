<?php
if($data['PageBar']['total']<2) return ;

echo <<<EOD
<div class="PageBar">
<div style="float:right">стр. {$data['PageBar']['current']} от {$data['PageBar']['total']} &nbsp;</div>
EOD;

$res = Array();

foreach($data['PageBar']['pages'] as $pg=>$href){
	if($href){
		$res[] = <<<EOD
<a href="{$href}">{$pg}</a>
EOD;
	}	else {
		$res[] = <<<EOD
<b>{$pg}</b>
EOD;
	}
}

echo implode("&nbsp;", $res);

?>
</div>