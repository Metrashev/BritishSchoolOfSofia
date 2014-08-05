<?php
function getsubject_namesControls($type='edit') {
	$con=array(

'controls'=>array(
'name_bg'=>array(
	'control'=>array("Label"=>"Name bg","name"=>"in_data[name_bg]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"name_bg","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"subject_names.name_bg","matchAllValue"=>"","cond"=>"like"    ),
),

'name_en'=>array(
	'control'=>array("Label"=>"Name en","name"=>"in_data[name_en]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"name_en","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"subject_names.name_en","matchAllValue"=>"","cond"=>"like"    ),
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