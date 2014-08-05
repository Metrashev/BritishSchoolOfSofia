<?php
function getcontact_formsControls($type='edit') {
	$con=array(

'controls'=>array(
'parent_name'=>array(
	'control'=>array("Label"=>"Parent name","name"=>"in_data[parent_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"parent_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.parent_name","matchAllValue"=>"","cond"=>"like"    ),
),

'email'=>array(
	'control'=>array("Label"=>"Email","name"=>"in_data[email]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"email","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.email","matchAllValue"=>"","cond"=>"like"    ),
),

'phone'=>array(
	'control'=>array("Label"=>"Phone","name"=>"in_data[phone]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"phone","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.phone","matchAllValue"=>"","cond"=>"like"    ),
),

'child_name'=>array(
	'control'=>array("Label"=>"Child name","name"=>"in_data[child_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"child_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.child_name","matchAllValue"=>"","cond"=>"like"    ),
),

'grade'=>array(
	'control'=>array("Label"=>"Grade","name"=>"in_data[grade]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"grade","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['class_type']))),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.grade","matchAllValue"=>"","cond"=>"like"    ),
),

'message'=>array(
	'control'=>array("Label"=>"Message","name"=>"in_data[message]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"message","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.message","matchAllValue"=>"","cond"=>"like"    ),
),

'submit_time'=>array(
	'control'=>array("Label"=>"Submit time","name"=>"in_data[submit_time]","isHTML"=>false,"tagName"=>"DateControl","bound_field"=>"submit_time","userFunc"=>"","FormatString"=>"%d/%m/%Y"),
	'write_data'=>array("type"=>DATA_DATE,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.submit_time","matchAllValue"=>"","cond"=>"between"    ),
),

'message_type'=>array(
	'control'=>array("Label"=>"Message type","name"=>"in_data[message_type]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"message_type","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['msg_topic']['bg']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.message_type","matchAllValue"=>"","cond"=>"="    ),
),

'status'=>array(
		'control'=>array("Label"=>"Message status","name"=>"in_data[status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"status","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['answer_status']))),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
		'search_data'=>array("search_name"=>"contact_forms.status","matchAllValue"=>"","cond"=>"="    ),
),
		
'subject'=>array(
		'control'=>array("Label"=>"Mail subject","name"=>"in_data[subject]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"subject","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
		'search_data'=>array("search_name"=>"contact_forms.subject","matchAllValue"=>"","cond"=>"like"    ),
),
		
'answer_msg'=>array(
	'control'=>array("Label"=>"Answer msg","name"=>"in_data[answer_msg]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"answer_msg","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"contact_forms.answer_msg","matchAllValue"=>"","cond"=>"like"    ),
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