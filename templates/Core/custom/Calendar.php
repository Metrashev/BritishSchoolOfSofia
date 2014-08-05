<h1 style="padding-bottom:15px;">Event Calendar</h1>
<?php
require_once(dirname(__FILE__).'/../../formprocessor/translations.php');
$form_tr = $form_tr[LNG_CURRENT];
$required_tr = $required_tr[LNG_CURRENT];
$cid = (int)$_GET['cid'];
$db = getdb();

	$year = (int)$_GET['year'];
	$month = (int)$_GET['month'];
	
	if( !checkdate($month, '01', $year) ) {
		$year = date('Y');
		$month = date('n');
	}
	
	$row_date = strtotime("{$year}-{$month}-01");
	$prev_row_date = strtotime("-1 month", $row_date);
	$next_row_date = strtotime("+1 month", $row_date);
	
	$calendar_week_from = 1; //0-for sunday 1-for monday and etc.
	$start_week = date('N', $row_date); //0-sunday ->w(0-6) |||| else 7-sunday-> N(1-7)
	if($start_week != $calendar_week_from) {
		$day_s = ($start_week==($calendar_week_from+1)) ? 'day' : 'days';
		$start_week -= $calendar_week_from;
		$row_date = strtotime("-{$start_week} {$day_s}", $row_date);
	} else {
		//back 7 days
		$row_date = strtotime("-7 days", $row_date);
	}
	
	$from_date = date('Y-m-d', $row_date);
	$to_date = date('Y-m-d', strtotime("+41 days", $row_date));
	
	//echo $from_date.' <-> '.$to_date.'<br />';
	$SQL = "SELECT calendar_dates.event_date, event_calendar.* FROM event_calendar
			INNER JOIN calendar_dates ON event_calendar.id=calendar_dates.event_id
			WHERE (calendar_dates.event_date BETWEEN ? AND ?) ORDER BY calendar_type ASC";
	
	$c_events = $db->getAssoc($SQL, array($from_date, $to_date), true);
	
	$cntDays = 42;//days;
	
	$calendar = array();
	$arrEl = -1;
	$tdN = 0;
	
	for($i=0; $i<$cntDays; $i++) {
	
		if($i%7==0) {
			++$arrEl;
			$tdN = 1;
			$calendar[$arrEl] = "<td class='td{$tdN}'>".(int)date('W', $row_date).'</td>'; //# week number
		}
		++$tdN;
		$key_date = date('Y-m-d', $row_date);
	
		$calendar[$arrEl] .= getDayEvents($row_date, $c_events[$key_date], $month, $year, $tdN);
		 
		$row_date = strtotime('+1 day', $row_date);
	}
	
	$calendar = '<tr>'.implode('</tr><tr>', $calendar).'</tr>';
	
	$prevM = date('n', $prev_row_date);
	$prevY = date('Y', $prev_row_date);
	$prevLink = <<<EOD
	<a class="prevLink" href="/?cid={$cid}&year={$prevY}&month={$prevM}">&laquo; {$GLOBALS['calendar_months'][$prevM]} {$prevY}</a>
EOD;
	
	$nextM = date('n', $next_row_date);
	$nextY = date('Y', $next_row_date);
	$nextLink = <<<EOD
	<a class="nextLink" href="/?cid={$cid}&year={$nextY}&month={$nextM}">{$GLOBALS['calendar_months'][$nextM]} {$nextY} &raquo;</a>
EOD;
	
	?>
		<table cellspacing="0" cellpadding="0" class="caption">
			<tr>
				<td style="text-align:left;"><?=$prevLink;?></td>
				<td style="text-align:center; color:white; text-transform:uppercase;"><?=$GLOBALS['calendar_months'][$month];?> <span class='year'><?=$year;?></span></td>
				<td style="text-align:right;"><?=$nextLink;?></td>
			</tr>
		</table>
		<table cellspacing="" cellpadding="" border="0" class="calendarEventsTbl">
			<tr>
				<th class="th1">Week</th>
				<th class="th2">Monday</th>
				<th class="th3">Tuesday</th>
				<th class="th4">Wednesday</th>
				<th class="th5">Thursday</th>
				<th class="th6">Friday</th>
				<th class="th7">Saturday</th>
				<th class="th8">Sunday</th>
			</tr>
			<?=$calendar;?> 
		</table>
	<div class="calendarLegend">
		<?=getCalendarLegend()?>
		
	</div>