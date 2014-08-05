<?php
function getacademic_yearControls($type='edit') {
	$con=array(

'controls'=>array(
'current_year'=>array(
	'control'=>array("Label"=>"Current year","name"=>"in_data[current_year]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"current_year","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"academic_year.current_year","matchAllValue"=>"","cond"=>"like"    ),
),

'next_year'=>array(
	'control'=>array("Label"=>"Next year","name"=>"in_data[next_year]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"next_year","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"academic_year.next_year","matchAllValue"=>"","cond"=>"like"    ),
),
'period_1'=>array(
	'control'=>array("Label"=>"1st Period","name"=>"in_data[period_1]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"period_1","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"academic_year.period_1","matchAllValue"=>"","cond"=>"like"    ),
),
'period_2'=>array(
	'control'=>array("Label"=>"2nd Period","name"=>"in_data[period_2]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"period_2","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"academic_year.period_2","matchAllValue"=>"","cond"=>"like"    ),
),
'period_3'=>array(
	'control'=>array("Label"=>"3rd Period","name"=>"in_data[period_3]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"period_3","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"academic_year.period_3","matchAllValue"=>"","cond"=>"like"    ),
),
'period_4'=>array(
	'control'=>array("Label"=>"4th Period","name"=>"in_data[period_4]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"period_4","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"academic_year.period_4","matchAllValue"=>"","cond"=>"like"    ),
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