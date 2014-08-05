<?php

class CFESkinPage extends CFESkinPageBase {
	
	
	function __construct(){
		parent::__construct();
		$this->CrumbsPath[0]['value']	= LNG_CURRENT==LNG_BG ? 'начало' : 'Home';
	}

	function getData(){
		


		
		if(is_array($this->data['CTX'])){
			$this->data['CTX'] = implode('',$this->data['CTX']);
		} else {
			$this->data['CTX'] = '';
		}
		

		
		return parent::getData();
	}
	
}

function getDayEvents($event_row_date, $events, $selected_month, $selected_year, $tdN) {

	$dayClass = 'inactiveDay';
	$day = date('j', $event_row_date);
	$td_classes = '';

	if( date('nY', $event_row_date) == $selected_month.$selected_year ) {
		$dayClass = 'activeDay';
	}

	if( date('dmY') == date('dmY', $event_row_date) ) { $td_classes = 'currentDay '; }

	if( !empty($events) ) {
		foreach($events as $k=>$v) {
				
			$v['title'] = $v['title'] ? '&rsaquo; '.nl2br($v['title']) : "";
				
			$events[$k] = <<<EOD
			<div class="eventType{$v['calendar_type']}" title="">{$v['title']}</div>
EOD;
			$td_classes = $v['event_type']==4 ? 'hDayBgr ' : $td_classes;//holiday event
		}
	}
	else{
		$events = array();
	}

	$td_classes .= "td{$tdN}";
	return "<td class='{$td_classes}'><div class='dayEvent'><div class='{$dayClass}'>{$day}</div>".implode("", $events).'</div></td>';
}

function getCalendarLegend() {

	$result = array();
	foreach($GLOBALS['calendar_categories'] as $k=>$v) {
		if(!$v) continue;
		$result[] = <<<EOD
		<div class="cLegendItem">
			<span class="eventBgr{$k}">&nbsp;</span>&nbsp;<span class="eventType{$k}">{$v}</span>
		</div>
EOD;
	}
// 	echo '<pre>' .print_r($result, true). '</pre>';
	return implode("", $result);
}

?>