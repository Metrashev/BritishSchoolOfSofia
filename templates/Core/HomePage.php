<script type="text/javascript" src="<?=JS_DIR;?>jquery.lightbox-0.5.js"></script>
<?php
$transHome = array(
		'bg'=>array(
			'read_more'=>'Прочети повече',
			'up_events'=>'Предстоящи събития',
			'past_events'=>'Минали събития',
			'blog_events'=>'От блога',
			'all_upcoming_events'=> 'Всички предстоящи събития',
			'all_past_events'=> 'Всички минали събития',
			'all_blog_events'=> 'Всичко от блога',
		),
		
		'en'=>array(
			'read_more'=>'Read more',
			'up_events'=>'Upcoming Events',
			'past_events'=>'Past Events',
			'blog_events'=>'Blog',
			'all_upcoming_events'=> 'All upcoming events',
			'all_past_events'=> 'All past events',
			'all_blog_events'=> 'All blog events',
		),
);
$transHome = $transHome[LNG_CURRENT];

$textCids = array(20,21,22);	
$GLOBALS['FESkinPage']->css[] = '/templates/Gallery/lightbox.css';
$db = getdb();
$lngcurr = LNG_CURRENT;
$count = 0;
foreach($textCids as $k){
	if($k==20){$link = LNG_CURRENT."/bkg/presentation/";}
	else if($k==21){$link = LNG_CURRENT."/bss/presentation/";}
	else if($k==22){$link = LNG_CURRENT."/bcs/presentation/";}
	$getText = $db->getRow("SELECT * FROM static_pages WHERE cid={$k}");
	
	$box[$count] = <<<EOD
		<div class="textBox">
			<h1>{$getText['title_'.LNG_CURRENT]}</h1>
			<p>{$getText['body_'.LNG_CURRENT]}</p>
			<a href="/{$link}" class="readMore"></a>
		</div>
EOD;
	$count++;
}
?>

<table cellspacing="0" cellpadding="0" class="homePage">
	<tr>
		<td><a class="schoolImage" href="/<?=LNG_CURRENT?>/bkg/presentation/"><img src="/i/bks.png" class="currentImage"/><img src="/i/bks_o.png" class="hoverImage" /></a><?=$box[0]?></td>
		<td style="padding:0 30px;"><a class="schoolImage" href="/<?=LNG_CURRENT?>/bss/presentation/" ><img src="/i/bss.png" class="currentImage" /><img src="/i/bss_o.png" class="hoverImage"/></a><?=$box[1]?></td>
		<td><a class="schoolImage" href="/<?=LNG_CURRENT?>/bcs/presentation/"><img src="/i/bcs.png" class="currentImage"/><img src="/i/bcs_o.png" class="hoverImage" /></a><?=$box[2]?></td>
	</tr>
</table>

<?php
	$description = 26;
	$getDescription = $db->getRow("SELECT * FROM static_pages WHERE cid='{$description}'");
	$desc = <<<EOD
		<h1>{$getDescription['title_'.LNG_CURRENT]}</h1>
		<p>{$getDescription['body_'.LNG_CURRENT]}</p>
EOD;
	
	
	$date_now = date("Y-m-d");
	$date_to = date("Y-m-d",strtotime("+3 month"));
	$date_from = date("Y-m-d",strtotime("last month"));
	$limit = "LIMIT 4";
	$blogCid = 6;
	
	$upEvents = $db->getAll("SELECT event_calendar.*, calendar_dates.event_date FROM event_calendar INNER JOIN calendar_dates ON event_calendar.id=calendar_dates.event_id WHERE is_visible_up=1 AND (event_date BETWEEN ? AND ?) ORDER BY `event_date` ASC {$limit}", array($date_now,$date_to));
	$pastEvents = $db->getAll("SELECT event_calendar.*, calendar_dates.event_date FROM event_calendar INNER JOIN calendar_dates ON event_calendar.id=calendar_dates.event_id WHERE is_visible_past=1 AND (event_date BETWEEN ? AND ?) ORDER BY `event_date` DESC {$limit}", array($date_from,$date_now));
	$blogEvents = $db->getAll("SELECT * FROM news_pages WHERE cid=? ORDER BY `due_date` DESC {$limit}", array($blogCid));
	$upcoming = array();
	$past = array();
	$blog = array();
	$pics = array();
	
if($upEvents){
	foreach($upEvents as $k=>$v){
		$flag = true;
		$pics = array();
		
		if($v['gallery_head_id']!=0){
			$getGallery = $db->getAll("SELECT * FROM gallery WHERE page_id={$v['gallery_head_id']} ORDER BY `order_field` ASC");
			
			
			foreach($getGallery as $p=>$d){
				if($flag){
					$flag = false;
					$link = <<<EOD
			<a href='/files/mf/gallery/{$d['id']}_img_1{$d['img']}' id="gall_link" class='lightbox{$v['id']}'>Галерия</a>
EOD;
					continue;
				}
					
				$pics[] = <<<EOD
				<a href="/files/mf/gallery/{$d['id']}_img_1{$d['img']}" class="lightbox{$v['id']}"></a>
EOD;
			}
			$pics = implode('',$pics);
			$script = <<<EOD
			<script type="text/javascript">
				$(function() {
			   		$('a.lightbox{$v['id']}').lightBox();
				});
			</script>
EOD;
		} else {
			$pics = '';
			$link = '';
			$script = '';
		}
		
		if($v['picture']){
			$img = "<img src='/files/mf/event_calendar/{$v['id']}_picture_pic{$v['picture']}' style='width:120px;' />";
		} else {
			$img = "<img src='/i/eventImg.png' />";	
		}
		
		$text = $v['title'];
		$date = strtotime($v['event_date']);
		$date = date('d/m/Y', $date);
		$upcoming[] = <<<EOD
			<div class="event up">
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
	// 		<div class="event up"><a href="/{$lngcurr}/upcoming_events/" class="seeAllEvents"></a></div> linka beshe na mqstoto na diva v upcoming[] dva reda nadolu
	
	$upcoming[] = <<<EOD
	<div class="event up"><a id="events_link" href="/{$lngcurr}/upcoming_events/">{$transHome['all_upcoming_events']}</a></div>
EOD;

}
if($pastEvents){
	foreach($pastEvents as $k=>$v){
		if($v['picture']){
			$img = "<img src='/files/mf/event_calendar/{$v['id']}_picture_pic{$v['picture']}' style='width:120px;' />";
		} else {
			$img = "<img src='/i/eventImg.png' />";
		}
		

		$text = $v['title'];		
		$date = strtotime($v['event_date']);
		$date = date('d/m/Y', $date);
		$past[] = <<<EOD
			<div class="event past">
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
		<div class="event past"><a id="events_link" href="/{$lngcurr}/past_events/">{$transHome['all_past_events']}</a></div>
EOD;
}


if($blogEvents){
	foreach($blogEvents as $k=>$v){
		if($v['picture']){
			$img = "<img src='/files/mf/news_pages/{$v['id']}_picture_pic{$v['picture']}' style='width:120px;' />";
		} else {
			$img = "<img src='/i/eventImg.png' />";
		}


		$text = $v['title'];
		$blog[] = <<<EOD
			<div class="event past">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td style="padding-right:10px;">{$img}</td>
						<td>
							<a href="/{$lngcurr}/blog/?NewsId={$v['id']}" class="eventText">{$text}</a>
							<p class="eventDate">{$date}</p>
						</td>
					</tr>
				</table>
			</div>
EOD;
	}
		$blog[] = <<<EOD
		<div class="event past"><a id="events_link" href="/{$lngcurr}/blog/">{$transHome['all_blog_events']}</a></div>
EOD;
}
?>

<script type="text/javascript">
$(document).ready(function(){
	var currTab;
	var nextTab;
	var currType;
	var nextType;
	$('a.event_tab').click(function(){
		if($(this).hasClass('inactive')) {
			currTab = $('div.event_tab_content.active');
			nextTab = $('div.event_tab_content.inactive');
			currType = $('a.event_tab.active');
			nextType = $('a.event_tab.inactive');
			
			currTab.fadeOut(100, function(){
				currTab.removeClass('active').addClass('inactive');
				
				currType.removeClass('active').addClass('inactive');
				nextType.removeClass('inactive').addClass('active');
				
				nextTab.fadeIn(100, function(){
					nextTab.removeClass('inactive').addClass('active');
				});
			});
		}
	});
});
</script>
<table cellspacing="0" cellpadding="0" class="contentTable">
	<tr>
		<td width="75%">
			<table cellspacing="0" cellpadding="0" class="contentTableEvents">
				<tr>
					<td class="events">
						<p class="event_tab up active"><?=$transHome['up_events']?></p>
						<div class="event_tab_content event_tab_content_up active"><?=implode('',$upcoming)?><div>
					</td>
					<td class="events">
						<p class="event_tab past inactive"><?=$transHome['past_events']?></p>
						<div class="event_tab_content event_tab_content_past inactive"><?=implode('',$past)?></div>
					</td>
					<td class="events">
						<p class="event_tab up active"><?=$transHome['blog_events']?></p>
						<div class="event_tab_content event_tab_content_up active"><?=implode('',$blog)?><div>
					</td>
				</tr>
			</table>
		</td>
		<td width="31%" id="ctx"><?php include(dirname(__FILE__).'/../Nav/ctxNav.php');?></td>
	</tr>
</table>