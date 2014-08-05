<?php
function getparents_guideControls($type='edit') {
	$sizes=array(
			'pic'=>array(300,0,"size=300x0"),
	
	);
	$con=array(

'controls'=>array(
		
'language'=>array(
	'control'=>array("Label"=>"Language","name"=>"in_data[language]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"language","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['CONFIG']['SiteLanguages'],))),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>true,),
),

'class_type'=>array(
	'control'=>array("Label"=>"Class type","name"=>"in_data[class_type]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"class_type","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['class_type']))),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"classes.class_type","matchAllValue"=>"0","cond"=>"="    ),
),

'title'=>array(
	'control'=>array("Label"=>"Title","name"=>"in_data[title]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"title","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"parents_guide.title","matchAllValue"=>"","cond"=>"like"    ),
),

'subtitle'=>array(
	'control'=>array("Label"=>"Subtitle","name"=>"in_data[subtitle]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"subtitle","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"parents_guide.subtitle","matchAllValue"=>"","cond"=>"like"    ),
),

'picture'=>array(
	'control'=>array("Label"=>"picture","name"=>"in_data[picture]","isHTML"=>false,"tagName"=>"ManagedImage","bound_field"=>"picture","userFunc"=>"","FormatString"=>"","parameters"=>array("table"=>"parents_guide","field"=>"picture","id"=>$_GET['id'],"dir"=>$GLOBALS['MANAGED_FILE_DIR'],"view_dir"=>$GLOBALS['MANAGED_FILE_DIR_IMG'],'resize'=>true,'overwrite'=>false,
'sizes'=>$sizes
)),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
),

'due_date'=>array(
	'control'=>array("Label"=>"Due date","name"=>"in_data[due_date]","isHTML"=>false,"tagName"=>"DateTimeControl","bound_field"=>"due_date","userFunc"=>"","FormatString"=>"%d/%m/%Y %H:%i"),
	'write_data'=>array("type"=>DATA_DATETIME,"required"=>false,),
	'search_data'=>array("search_name"=>"parents_guide.due_date","matchAllValue"=>"","cond"=>"between"    ),
),

'is_visible'=>array(
	'control'=>array("Label"=>"Is visible","name"=>"in_data[is_visible]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"is_visible","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"parents_guide.is_visible","matchAllValue"=>"","cond"=>"="    ),
),

'body'=>array(
		'control'=>array("Label"=>"Body","name"=>"in_data[body]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"body","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
		'search_data'=>array("search_name"=>"parents_guide.body","matchAllValue"=>"","cond"=>"like"    ),
),
		
'keywords'=>array(
	'control'=>array('Label'=>'Keywords','name'=>'in_data[keywords]','tagName'=>'Input','bound_field'=>'keywords','userFunc'=>'','FormatString'=>'',),
	'search_data'=>array('search_name'=>'parents_guide.title, parents_guide.due_date, parents_guide.category_type','cond'=>'keywords','matchAllValue'=>'')
),)
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