<script type="text/javascript" src="<?=JS_DIR;?>jquery.lightbox-0.5.js"></script>
<?php
$transHome = array(
		'bg'=>array(
			'read_more'=>'Прочети повече',
			'up_events'=>'Предстоящи събития',
			'past_events'=>'Минали събития',
			'all_upcoming_events'=> 'Всички предстоящи събития',
			'all_past_events'=> 'Всички минали събития',
		),
		
		'en'=>array(
			'read_more'=>'Read more',
			'up_events'=>'Upcoming Events',
			'past_events'=>'Past Events',
			'all_upcoming_events'=> 'All upcoming events',
			'all_past_events'=> 'All past events',
		),
);
$transHome = $transHome[LNG_CURRENT];
$GLOBALS['FESkinPage']->css[] = '/templates/Gallery/lightbox.css';
$db = getdb();
$lngcurr = LNG_CURRENT;
if($GLOBALS['fc']->node['id']==37) $category = 2;
elseif($GLOBALS['fc']->node['id']==43) $category = 1;
elseif($GLOBALS['fc']->node['id']==49) $category = 3;

//Kym septemvri mesec trqbva da se redaktira $date_to da e next month, a ne kato sega +3 month)

$date_now = date("Y-m-d"); 
$date_to = date("Y-m-d",strtotime("+3 month"));
$date_from = date("Y-m-d",strtotime("last month"));
$limit = "LIMIT 4";
$upEvents = $db->getAll("SELECT event_calendar.*, calendar_dates.event_date FROM event_calendar INNER JOIN calendar_dates ON event_calendar.id=calendar_dates.event_id WHERE is_visible_up=1 AND event_category IN({$category},4) AND (event_date BETWEEN ? AND ?) ORDER BY `event_date` ASC {$limit}", array($date_now,$date_to));
$pastEvents = $db->getAll("SELECT event_calendar.*, calendar_dates.event_date FROM event_calendar INNER JOIN calendar_dates ON event_calendar.id=calendar_dates.event_id WHERE is_visible_past=1 AND event_category IN({$category},4) AND (event_date BETWEEN ? AND ?) ORDER BY `event_date` DESC {$limit}", array($date_from,$date_now));

	foreach($upEvents as $k=>$v){
		$flag = true;
		if($v['gallery_head_id']!=0){
			$getGallery = $db->getAll("SELECT * FROM gallery WHERE page_id={$v['gallery_head_id']} ORDER BY `order_field` ASC");
		
			foreach($getGallery as $p=>$d){
				if($flag){
					$flag = false;
					$link = <<<EOD
			<a href='/files/mf/gallery/{$d['id']}_img_1{$d['img']}' class='lightbox{$row['id']}'>Галерия</a>
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
		if($v['picture']){
			$img = "<img src='/files/mf/event_calendar/{$v['id']}_picture_pic{$v['picture']}' style='width:140px;' />";
		} else {
			$img = "<img src='/i/eventImg.png' />";	
		}
		
		$text = $v['title'];
		$date = strtotime($v['event_date']);
		$date = date('d/m/Y', $date);
		$upcoming[] = <<<EOD
			<div class="event up isVis">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td style="padding-right:10px;">{$img}</td>
						<td>
							<a href="/{$lngcurr}/upcoming_events/?eventId={$v['id']}" class="eventText">{$text}</a>
							<p class="eventDate">{$date}</p>
							{$link}
							{$pics}
						</td>
					</tr>
				</table>
				{$script}
			</div>
EOD;
	}
	$upcoming[] = <<<EOD
		<div class="event up isVis"><a id="events_link" href="/{$lngcurr}/upcoming_events/">{$transHome['all_upcoming_events']}</a></div>
EOD;
	
	foreach($pastEvents as $k=>$v){
		if($v['picture']){
			$img = "<img src='/files/mf/event_calendar/{$v['id']}_picture_pic{$v['picture']}' style='width:140px;' />";
		} else {
			$img = "<img src='/i/eventImg.png' />";
		}
		

		$text = $v['title'];		
		$date = strtotime($v['event_date']);
		$date = date('d/m/Y', $date);
		$past[] = <<<EOD
			<div class="event past notVis">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td style="padding-right:10px;">{$img}</td>
						<td>
							<a href="/{$lngcurr}/past_events/?eventId={$v['id']}" class="eventText">{$text}</a>
							<p class="eventDate">{$date}</p>
						</td>
					</tr>
				</table>
			</div>
EOD;
	}
	$past[] = <<<EOD
		<div class="event past notVis"><a id="events_link" href="/{$lngcurr}/past_events/">{$transHome['all_past_events']}</a></div>
EOD;
?>
<script type="text/javascript">
$(document).ready(function(){
	var currTab;
	var nextTab;
	var currType;
	var nextType;
	$('a.event_tab').click(function(){
		if($(this).hasClass('inactive')){
			currTab = $('div.event.isVis');
			nextTab = $('div.event.notVis');
			currType = $('a.event_tab.active');
			nextType = $('a.event_tab.inactive');
			
			currTab.fadeOut(500, function(){
				currTab.removeClass('isVis').addClass('notVis');
				
				currType.removeClass('active').addClass('inactive');
				nextType.removeClass('inactive').addClass('active');
				
				nextTab.fadeIn(500, function(){
					nextTab.removeClass('notVis').addClass('isVis');
				});
			});
		}
	});
});
</script>
<div class="welcomeText">
<?php
$getWelcomeCid = $db->getOne("SELECT id FROM categories WHERE pid={$GLOBALS['fc']->node['id']}");
$getWelcomeText = $db->getRow("SELECT * FROM static_pages WHERE cid={$getWelcomeCid}");
?>
			<h1><?=$getWelcomeText['title_'.LNG_CURRENT]?></h1>
			<p><?=$getWelcomeText['body_'.LNG_CURRENT]?></p>	
</div>

<div class="events">
	<?php
	if(!empty($upcoming) || !empty($past)) {
	echo <<<EOD
	 <a class="event_tab up active">{$transHome['up_events']}</a><a class="event_tab past inactive">{$transHome['past_events']}</a>
EOD;
	echo implode('',$upcoming);
	echo implode('',$past);
	}
	?>
</div>