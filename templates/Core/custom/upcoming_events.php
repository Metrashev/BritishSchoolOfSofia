<script type="text/javascript" src="<?=JS_DIR;?>jquery.lightbox-0.5.js"></script>
<h1>Upcoming events</h1>
<?php
$db = getdb();
$lng = LNG_CURRENT;
$GLOBALS['FESkinPage']->css[] = '/templates/Gallery/lightbox.css';
if(isset($_GET['eventId'])){
	$eventId = (int)$_GET['eventId'];
	$getEvent = $db->getRow("SELECT event_calendar.*, GROUP_CONCAT(calendar_dates.event_date) AS event_date FROM event_calendar INNER JOIN calendar_dates ON event_calendar.id=calendar_dates.event_id WHERE event_calendar.id={$eventId}");
	
	$flag = true;
	if($getEvent['gallery_head_id_2']!=0){
		$getGallery = $db->getAll("SELECT * FROM gallery WHERE page_id={$getEvent['gallery_head_id_2']} ORDER BY `order_field` ASC");
	
		foreach($getGallery as $p=>$d){
			if($flag){
				$flag = false;
				$link = <<<EOD
			<a href='/files/mf/gallery/{$d['id']}_img_1{$d['img']}' id='gall_link' class='lightbox{$row['id']}'>Галерия</a>
EOD;
				continue;
			}
				
			$pics[] = <<<EOD
				<a href="/files/mf/gallery/{$d['id']}_img_1{$d['img']}" class="lightbox{$row['id']}"></a>
EOD;
		}
		$pics = implode('',$pics);
		$script = <<<EOD
			<script type="text/javascript">
				$(function() {
			   		$('a.lightbox{$row['id']} ').lightBox();
				});
			</script>
EOD;
	} else {
		$pics = '';
		$link = '';
		$script = '';
	}
	
	
	$date = date('d/m/Y',strtotime($getEvent['event_date']));
	$dateEx = explode("|", $date);
	
	echo <<<EOD
		<div class="fullPast">
			<h3>{$getEvent['title']}</h3><br/>
			<p class="date">{$dateEx}</p> {$link}<br/><br/>
			{$getEvent['upcoming_text']}<br/>
			{$pics}
		</div>
		{$script}
EOD;
	return;
}


$date_now = date("Y-m-d",strtotime("-1 day"));
$date_to = date("Y-m-d",strtotime("+90 day"));

$SQL = $db->prepareExecute("SELECT event_calendar.*, GROUP_CONCAT(calendar_dates.event_date ORDER BY event_date) AS event_date FROM event_calendar INNER JOIN calendar_dates ON event_calendar.id=calendar_dates.event_id WHERE is_visible_up=1 AND (event_date BETWEEN ? AND ?)  GROUP BY event_calendar.id ORDER BY `event_date` ASC", array($date_now, $date_to));

$getEvents = $db->getAll($SQL);
foreach($getEvents as $k=>$row){
	
	
	$date = $row['event_date']; 
	$dates = explode(",", $date);
	$date_count = 0;
	if ($date_count<$dates) {
		
	}
	else if($date_count<$dates){
		date('d/m/Y',strtotime($row['event_date']));
	}
	
	
	echo <<<EOD
		<table cellspacing="0" cellpadding="0" class="upcoming">
			<tr>
				<td><div class="event_pic"><img src="/files/mf/event_calendar/{$row['id']}_picture_pic{$row['picture']}" /></div></td>
				<td>
					<a href="/{$lng}/upcoming_events/?eventId={$row['id']}"><h3>{$row['title']}</h3></a><br/>
					<p class="date">{$dates}</p><br/>
					<br/>
					<a href="/{$lng}/upcoming_events/?eventId={$row['id']}"><img src="/i/event_read_more_{$lng}.png" /></a>
				</td>
			</tr>
		</table>
EOD;
}
?>
