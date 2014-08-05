<?php
function getsubjectsControls($type='edit') {
	$getSubjects = array(''=>'');
	$getSubjects += getdb()->getAssoc("SELECT id, name_bg FROM subject_names");
	$sizes=array(
			'pic'=>array(280,210,"size=280x210"),
	);
	$con=array(
			
'controls'=>array(
'name'=>array(
	'control'=>array("Label"=>"Name","name"=>"in_data[name]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"name","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $getSubjects))),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"subjects.name","matchAllValue"=>"","cond"=>"like"    ),
),

'class_type'=>array(
	'control'=>array("Label"=>"Class type","name"=>"in_data[class_type]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"class_type","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['class_type']))),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"subjects.class_type","matchAllValue"=>"0","cond"=>"="    ),
),

'description_en'=>array(
		'control'=>array("Label"=>"Description en","name"=>"in_data[description_en]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"description_en","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
		'search_data'=>array("search_name"=>"subjects.description_en","matchAllValue"=>"","cond"=>"like"    ),
),
		
'invisible'=>array(
		'control'=>array("Label"=>"Invisible","name"=>"in_data[invisible]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"invisible","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
),
		
'image'=>array(
		'control'=>array("Label"=>"image","name"=>"in_data[image]","isHTML"=>false,"tagName"=>"ManagedImage","bound_field"=>"image","userFunc"=>"","FormatString"=>"",
				"parameters"=>array("table"=>"subjects","field"=>"image","id"=>$_GET['id'],"dir"=>$GLOBALS['MANAGED_FILE_DIR'],"view_dir"=>$GLOBALS['MANAGED_FILE_DIR_IMG'],'resize'=>true,'overwrite'=>false,
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