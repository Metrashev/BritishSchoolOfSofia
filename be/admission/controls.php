<?php
function getadmissionControls($type='edit') {
	$con=array(

'controls'=>array(
's_first_name'=>array(
	'control'=>array("Label"=>"S first name","name"=>"in_data[s_first_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"s_first_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.s_first_name","matchAllValue"=>"","cond"=>"like"    ),
),

's_mid_name'=>array(
	'control'=>array("Label"=>"S mid name","name"=>"in_data[s_mid_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"s_mid_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.s_mid_name","matchAllValue"=>"","cond"=>"like"    ),
),

's_family_name'=>array(
	'control'=>array("Label"=>"S family name","name"=>"in_data[s_family_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"s_family_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.s_family_name","matchAllValue"=>"","cond"=>"like"    ),
),

's_egn'=>array(
	'control'=>array("Label"=>"S egn","name"=>"in_data[s_egn]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"s_egn","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.s_egn","matchAllValue"=>"","cond"=>"like"    ),
),

'passport_number'=>array(
	'control'=>array("Label"=>"Passport number","name"=>"in_data[passport_number]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"passport_number","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.passport_number","matchAllValue"=>"","cond"=>"="    ),
),
		
'unique_id'=>array(
		'control'=>array("Label"=>"Student Id","name"=>"in_data[unique_id]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"unique_id","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_INT,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.unique_id","matchAllValue"=>"","cond"=>"="    ),
),
		
'date_submited'=>array(
	'control'=>array("Label"=>"Date submited","name"=>"in_data[date_submited]","isHTML"=>false,"tagName"=>"DateControl","bound_field"=>"date_submited","userFunc"=>"","FormatString"=>"%d/%m/%Y"),
	'write_data'=>array("type"=>DATA_DATE,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.date_submited","matchAllValue"=>"","cond"=>"between"    ),
),

's_birthdate'=>array(
	'control'=>array("Label"=>"S birthdate","name"=>"in_data[s_birthdate]","isHTML"=>false,"tagName"=>"DateControl","bound_field"=>"s_birthdate","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_DATE,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.s_birthdate","matchAllValue"=>"","cond"=>"between"    ),
),
		
's_birth_year'=>array(
	'control'=>array("Label"=>"S birthdate","name"=>"in_data[s_birth_year]","isHTML"=>false,"tagName"=>"input","bound_field"=>"s_birthdate","userFunc"=>"","FormatString"=>""),
	'search_data'=>array("search_name"=>"YEAR(admission.s_birthdate)","matchAllValue"=>"","cond"=>"="    ),
),

'academic_year'=>array(
		'control'=>array("Label"=>"Academic year","name"=>"in_data[academic_year]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"academic_year","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.academic_year","matchAllValue"=>"","cond"=>"="    ),
),

's_gender'=>array(
	'control'=>array("Label"=>"S gender","name"=>"in_data[s_gender]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"s_gender","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> array(''=>'','Male'=>'Male','Female'=>'Female')))),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.s_gender","matchAllValue"=>"","cond"=>"="    ),
),

'class_type'=>array(
	'control'=>array("Label"=>"Class type","name"=>"in_data[class_type]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"class_type","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['class_type']))),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.class_type","matchAllValue"=>"","cond"=>"like"    ),
),
		
'paralelka'=>array(
		'control'=>array("Label"=>"Paralelka","name"=>"in_data[paralelka]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"class_type","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['paralelki']))),
		'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.paralelka","matchAllValue"=>"","cond"=>"like"    ),
),

'transport'=>array(
	'control'=>array("Label"=>"Transport","name"=>"in_data[transport]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"transport","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> array(''=>'','0'=>'No','1'=>'Yes')))),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.transport","matchAllValue"=>"","cond"=>"="    ),
),

'lang_type'=>array(
	'control'=>array("Label"=>"Form language version","name"=>"in_data[lang_type]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"lang_type","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=>$GLOBALS['form_lang']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.lang_type","matchAllValue"=>"","cond"=>"="    ),
),

'tax_1'=>array(
	'control'=>array("Label"=>"1st Payment","name"=>"in_data[tax_1]","isHTML"=>false,"tagName"=>"input","bound_field"=>"tax_1","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_DECIMAL,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.tax_1","matchAllValue"=>"","cond"=>"keywords"    ),
),

'tax_status_1'=>array(
	'control'=>array("Label"=>"Tax status 1","name"=>"in_data[tax_status_1]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"tax_status_1","userFunc"=>"","FormatString"=>"",),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.tax_status_1","matchAllValue"=>"","cond"=>"="    ),
),
		
'tax_2'=>array(
	'control'=>array("Label"=>"2nd Payment","name"=>"in_data[tax_2]","isHTML"=>false,"tagName"=>"input","bound_field"=>"tax_2","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_DECIMAL,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.tax_2","matchAllValue"=>"","cond"=>"keywords"    ),
),

'tax_status_2'=>array(
	'control'=>array("Label"=>"Tax status 2","name"=>"in_data[tax_status_2]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"tax_status_2","userFunc"=>"","FormatString"=>"",),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.tax_status_2","matchAllValue"=>"","cond"=>"="    ),
),
		
'tax_3'=>array(
	'control'=>array("Label"=>"3rd Payment","name"=>"in_data[tax_3]","isHTML"=>false,"tagName"=>"input","bound_field"=>"tax_3","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_DECIMAL,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.tax_3","matchAllValue"=>"","cond"=>"keywords"    ),
),

'tax_status_3'=>array(
	'control'=>array("Label"=>"Tax status 3","name"=>"in_data[tax_status_3]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"tax_status_3","userFunc"=>"","FormatString"=>"",),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.tax_status_3","matchAllValue"=>"","cond"=>"="    ),
),

'payment_status'=>array(
	'control'=>array("Label"=>"Payment status","name"=>"in_data[payment_status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"payment_status","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['payment_status']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.payment_status","matchAllValue"=>"","cond"=>"="    ),
),
		
'payment_method'=>array(
	'control'=>array("Label"=>"Payment method","name"=>"in_data[payment_method]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"payment_method","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['payment_method']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.payment_method","matchAllValue"=>"","cond"=>"="    ),
),

'enrollment_fee'=>array(
	'control'=>array("Label"=>"Enrollment fee","name"=>"in_data[enrollment_fee]","isHTML"=>false,"tagName"=>"input","bound_field"=>"tax","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_DECIMAL,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.enrollment_fee","matchAllValue"=>"","cond"=>"keywords"    ),
),
	
'enrollment_fee_status'=>array(
	'control'=>array("Label"=>"Enrollment fee status","name"=>"in_data[enrollment_fee_status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"enrollment_fee_status","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> array(''=>'','0'=>'Not payed','1'=>'Payed')))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.enrollment_fee_status","matchAllValue"=>"","cond"=>"="    ),
),

'student_status'=>array(
	'control'=>array("Label"=>"Student status","name"=>"in_data[student_status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"student_status","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['student_status']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"admission.student_status","matchAllValue"=>"","cond"=>"="    ),
),
		
'medical_exam_form'=>array(
		'control'=>array("Label"=>"Medical exam form","name"=>"in_data[medical_exam_form]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"medical_exam_form","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.medical_exam_form","matchAllValue"=>"","cond"=>"="    ),
),

'signing_agreement'=>array(
		'control'=>array("Label"=>"Signing agreement","name"=>"in_data[signing_agreement]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"signing_agreement","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
),
'signing_agreement_s'=>array(
		'control'=>array("Label"=>"Signing agreement","name"=>"in_data[signing_agreement]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"signing_agreement","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['yes_no']))),
		'search_data'=>array("search_name"=>"admission.signing_agreement","matchAllValue"=>"","cond"=>"="    ),
),

'certificate_pre_school'=>array(
		'control'=>array("Label"=>"Certificate pre school","name"=>"in_data[certificate_pre_school]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"certificate_pre_school","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.certificate_pre_school","matchAllValue"=>"","cond"=>"="    ),
),

'm_idcard_copy'=>array(
		'control'=>array("Label"=>"M idcard copy","name"=>"in_data[m_idcard_copy]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"m_idcard_copy","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.m_idcard_copy","matchAllValue"=>"","cond"=>"="    ),
),

'f_idcard_copy'=>array(
		'control'=>array("Label"=>"F idcard copy","name"=>"in_data[f_idcard_copy]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"f_idcard_copy","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.f_idcard_copy","matchAllValue"=>"","cond"=>"="    ),
),

'photograph'=>array(
		'control'=>array("Label"=>"Photograph","name"=>"in_data[photograph]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"photograph","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.photograph","matchAllValue"=>"","cond"=>"="    ),
),

'certificate_of_transfer'=>array(
		'control'=>array("Label"=>"Certificate of transfer","name"=>"in_data[certificate_of_transfer]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"certificate_of_transfer","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.certificate_of_transfer","matchAllValue"=>"","cond"=>"="    ),
),
'notes'=>array(
		'control'=>array("Label"=>"Notes","name"=>"in_data[notes]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"notes","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
		'search_data'=>array("search_name"=>"admission.notes","matchAllValue"=>"","cond"=>"like"    ),
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