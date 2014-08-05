<?php
function getteachersControls($type='edit') {
	$getSubjects[] = '';
	$getSubjects += getdb()->getAssoc("SELECT id, name_bg FROM subject_names");
	$sizes=array(
			'pic'=>array(0,0,"size=0x0"),
	);
	$con=array(

'controls'=>array(
'name'=>array(
	'control'=>array("Label"=>"Name","name"=>"in_data[name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"teachers.name","matchAllValue"=>"","cond"=>"like"    ),
),
		
'name_en'=>array(
		'control'=>array("Label"=>"Name en","name"=>"in_data[name_en]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"name_en","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
		'search_data'=>array("search_name"=>"teachers.name_en","matchAllValue"=>"","cond"=>"like"    ),
),
		

'full_description'=>array(
	'control'=>array("Label"=>"Full description","name"=>"in_data[full_description]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"full_description","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"teachers.full_description","matchAllValue"=>"","cond"=>"like"    ),
),
		
'full_description_en'=>array(
		'control'=>array("Label"=>"Full description en","name"=>"in_data[full_description_en]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"full_description_en","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
		'search_data'=>array("search_name"=>"teachers.full_description_en","matchAllValue"=>"","cond"=>"like"    ),
),
'bkg'=>array(
		'control'=>array("Label"=>"bkg","name"=>"in_data[bkg]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"bkg","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
),
'bkg_s'=>array(
		'control'=>array("Label"=>"bkg_s","name"=>"in_data[bkg_s]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"class_type","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> array(''=>'', 0=>'No', 1=>'Yes')))),
		'search_data'=>array("search_name"=>"teachers.bkg","matchAllValue"=>"","cond"=>"="    ),
		
),
'bss'=>array(
		'control'=>array("Label"=>"bss","name"=>"in_data[bss]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"bss","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
),
'bss_s'=>array(
		'control'=>array("Label"=>"bss_s","name"=>"in_data[bss_s]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"class_type","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> array(''=>'', 0=>'No', 1=>'Yes')))),
		'search_data'=>array("search_name"=>"teachers.bss","matchAllValue"=>"","cond"=>"="    ),

),
'bcs'=>array(
		'control'=>array("Label"=>"bcs","name"=>"in_data[bcs]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"bcs","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
),
'bcs_s'=>array(
		'control'=>array("Label"=>"bcs_s","name"=>"in_data[bcs_s]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"class_type","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> array(''=>'', 0=>'No', 1=>'Yes')))),
		'search_data'=>array("search_name"=>"teachers.bcs","matchAllValue"=>"","cond"=>"="    ),

),	
'photo'=>array(
	'control'=>array("Label"=>"Photo","name"=>"in_data[photo]","isHTML"=>false,"tagName"=>"ManagedImage","bound_field"=>"photo","userFunc"=>"","FormatString"=>"","parameters"=>array("table"=>"teachers","field"=>"photo","id"=>$_GET['id'],"dir"=>$GLOBALS['MANAGED_FILE_DIR'],"view_dir"=>$GLOBALS['MANAGED_FILE_DIR_IMG'],'resize'=>true,'overwrite'=>false,
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