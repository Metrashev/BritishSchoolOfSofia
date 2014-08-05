<?php
function getevent_calendarControls($type='edit') {
	$sizes=array(
			'pic'=>array(0,0,"size=0x0"),
	);
	$getGalleries[] = '';
	$getGalleries += getdb()->getAssoc("SELECT id, name FROM gallery_head");
	$con=array(

'controls'=>array(
'title'=>array(
	'control'=>array("Label"=>"Title","name"=>"in_data[title]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"title","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.title","matchAllValue"=>"","cond"=>"like"    ),
),

'short_description'=>array(
	'control'=>array("Label"=>"Short description","name"=>"in_data[short_description]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"short_description","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.short_description","matchAllValue"=>"","cond"=>"like"    ),
),

'calendar_type'=>array(
	'control'=>array("Label"=>"Calendar type","name"=>"in_data[calendar_type]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"calendar_type","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['calendar_categories']))),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.calendar_type","matchAllValue"=>"","cond"=>"="    ),
),

'is_visible_up'=>array(
	'control'=>array("Label"=>"Is visible up","name"=>"in_data[is_visible_up]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"is_visible_up","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['yes_no']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.is_visible_up","matchAllValue"=>"","cond"=>"="    ),
),

'is_visible_past'=>array(
	'control'=>array("Label"=>"Is visible past","name"=>"in_data[is_visible_past]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"is_visible_past","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['yes_no']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.is_visible_past","matchAllValue"=>"","cond"=>"="    ),
),

'upcoming_text'=>array(
	'control'=>array("Label"=>"Upcoming text","name"=>"in_data[upcoming_text]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"upcoming_text","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.upcoming_text","matchAllValue"=>"","cond"=>"like"    ),
),

'past_text'=>array(
	'control'=>array("Label"=>"Past text","name"=>"in_data[past_text]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"past_text","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.past_text","matchAllValue"=>"","cond"=>"like"    ),
),

'gallery_head_id'=>array(
	'control'=>array("Label"=>"Gallery head id for UP","name"=>"in_data[gallery_head_id]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"gallery_head_id","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $getGalleries))),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.gallery_head_id","matchAllValue"=>"","cond"=>"="    ),
),
		
'gallery_head_id_2'=>array(
		'control'=>array("Label"=>"Gallery head id for PAST","name"=>"in_data[gallery_head_id_2]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"gallery_head_id_2","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $getGalleries))),
		'write_data'=>array("type"=>DATA_INT,"required"=>false,),
		'search_data'=>array("search_name"=>"event_calendar.gallery_head_id_2","matchAllValue"=>"","cond"=>"="    ),
),

'event_category'=>array(
	'control'=>array("Label"=>"Event category","name"=>"in_data[event_category]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"event_category","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['event_category']))),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"event_calendar.event_category","matchAllValue"=>"","cond"=>"="    ),
),

'picture'=>array(
	'control'=>array("Label"=>"Picture","name"=>"in_data[picture]","isHTML"=>false,"tagName"=>"ManagedImage","bound_field"=>"picture","userFunc"=>"","FormatString"=>"","parameters"=>array("table"=>"event_calendar","field"=>"picture","id"=>$_GET['id'],"dir"=>$GLOBALS['MANAGED_FILE_DIR'],"view_dir"=>$GLOBALS['MANAGED_FILE_DIR_IMG'],'resize'=>true,'overwrite'=>false,
'sizes'=>$sizes
)),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
),
)
);

if($type=='search') {
    	$con['template']=array('dir'=>dirname(__FILE__).'/search.tpl');
    }
else {
	$con['template']=array('dir'=>dirname(__FILE__).'/edit.tpl');
}
    return $con;
}

?>