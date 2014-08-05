<?php
function getadmission_summerControls($type='edit') {
	$con=array(

'controls'=>array(
'first_name'=>array(
	'control'=>array("Label"=>"First name","name"=>"in_data[first_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"first_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.first_name","matchAllValue"=>"","cond"=>"like"    ),
),

'family_name'=>array(
	'control'=>array("Label"=>"Family name","name"=>"in_data[family_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"family_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.family_name","matchAllValue"=>"","cond"=>"like"    ),
),

'egn'=>array(
	'control'=>array("Label"=>"Egn","name"=>"in_data[egn]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"egn","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.egn","matchAllValue"=>"","cond"=>"like"    ),
),

'submit_date'=>array(
	'control'=>array("Label"=>"Submit date","name"=>"in_data[submit_date]","isHTML"=>false,"tagName"=>"DateControl","bound_field"=>"submit_date","userFunc"=>"","FormatString"=>"%d/%m/%Y"),
	'write_data'=>array("type"=>DATA_DATE,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.submit_date","matchAllValue"=>"","cond"=>"between"    ),
),

'birthdate'=>array(
	'control'=>array("Label"=>"Birthdate","name"=>"in_data[birthdate]","isHTML"=>false,"tagName"=>"DateControl","bound_field"=>"birthdate","userFunc"=>"","FormatString"=>"%d/%m/%Y"),
	'write_data'=>array("type"=>DATA_DATE,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.birthdate","matchAllValue"=>"","cond"=>"between"    ),
),

'period_1'=>array(
	'control'=>array("Label"=>"Period 1","name"=>"in_data[period_1]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"period_1","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.period_1","matchAllValue"=>"","cond"=>"="    ),
),

'period_2'=>array(
	'control'=>array("Label"=>"Period 2","name"=>"in_data[period_2]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"period_2","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.period_2","matchAllValue"=>"","cond"=>"="    ),
),

'period_3'=>array(
	'control'=>array("Label"=>"Period 3","name"=>"in_data[period_3]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"period_3","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.period_3","matchAllValue"=>"","cond"=>"="    ),
),

'period_4'=>array(
	'control'=>array("Label"=>"Period 4","name"=>"in_data[period_4]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"period_4","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.period_4","matchAllValue"=>"","cond"=>"="    ),
),

'p_first_name'=>array(
	'control'=>array("Label"=>"P first name","name"=>"in_data[p_first_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"p_first_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.p_first_name","matchAllValue"=>"","cond"=>"like"    ),
),

'p_family_name'=>array(
	'control'=>array("Label"=>"P family name","name"=>"in_data[p_family_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"p_family_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.p_family_name","matchAllValue"=>"","cond"=>"like"    ),
),

'p_email'=>array(
	'control'=>array("Label"=>"P email","name"=>"in_data[p_email]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"p_email","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.p_email","matchAllValue"=>"","cond"=>"like"    ),
),

'p_phone'=>array(
	'control'=>array("Label"=>"P phone","name"=>"in_data[p_phone]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"p_phone","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.p_phone","matchAllValue"=>"","cond"=>"like"    ),
),

'info'=>array(
	'control'=>array("Label"=>"Info","name"=>"in_data[info]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"info","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.info","matchAllValue"=>"","cond"=>"like"    ),
),

'status'=>array(
	'control'=>array("Label"=>"Status","name"=>"in_data[status]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"status","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
),
'status_s'=>array(
		'control'=>array("Label"=>"Status","name"=>"in_data[status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"status","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['summer_status']))),
		'search_data'=>array("search_name"=>"admission_summer.status","matchAllValue"=>"","cond"=>"="    ),
),

'tax'=>array(
	'control'=>array("Label"=>"Tax","name"=>"in_data[tax]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"tax","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_DOUBLE,"required"=>false,),
	'search_data'=>array("search_name"=>"admission_summer.tax","matchAllValue"=>"","cond"=>"keywords"    ),
),

'tax_status'=>array(
	'control'=>array("Label"=>"Tax status","name"=>"in_data[tax_status]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"tax_status","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
),
'tax_status_s'=>array(
		'control'=>array("Label"=>"Tax status","name"=>"in_data[tax_status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"tax_status","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['yes_no']))),
		'search_data'=>array("search_name"=>"admission_summer.tax_status","matchAllValue"=>"","cond"=>"="    ),
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