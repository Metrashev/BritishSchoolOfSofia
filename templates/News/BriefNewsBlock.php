<?
$lng=LNG_CURRENT;
$translation = array(
	'bg'=>array(
		'read_more'=>'Прочети повече',
	),
	'en'=>array(
		'read_more'=>'Read More',
	),
);
$translation = $translation[LNG_CURRENT];

$img = "";
if($news['picture']['pic']) {	
 	$img = <<<EOD
 		<a href="{$news['href']}"><img src="{$news['picture']['pic']}" alt="{$news['title']}" style="width:200px;padding:3px; border:1px solid #999;" /></a>
EOD;
}
echo <<<EOD
	<table cellspacing="0" cellpadding="0" class="newsTable">
		<tr>
			<td style="padding-right:10px;">{$img}</td>
			<td>
				<a href="{$news['href']}"><h2>{$news['title']}</h2></a>
				<p>{$news['subtitle']}</p>
				<a class="more-read_{$lng}" href="{$news['href']}"></a>
			</td>
		</tr>
	</table>
EOD;

?>