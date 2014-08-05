<?php
function getmedical_formsControls($type='edit') {
	$con=array(

'controls'=>array(
'student_id'=>array(
	'control'=>array("Label"=>"Student id","name"=>"in_data[student_id]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"student_id","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_INT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.student_id","matchAllValue"=>"","cond"=>"="    ),
),

's_first_name'=>array(
	'control'=>array("Label"=>"S first name","name"=>"in_data[s_first_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"s_first_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.s_first_name","matchAllValue"=>"","cond"=>"like"    ),
),

's_family_name'=>array(
	'control'=>array("Label"=>"S family name","name"=>"in_data[s_family_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"s_family_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.s_family_name","matchAllValue"=>"","cond"=>"like"    ),
),

'blood_test'=>array(
	'control'=>array("Label"=>"Blood test","name"=>"in_data[blood_test]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"blood_test","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.blood_test","matchAllValue"=>"","cond"=>"="    ),
),

'paraside_test'=>array(
	'control'=>array("Label"=>"Paraside test","name"=>"in_data[paraside_test]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"paraside_test","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.paraside_test","matchAllValue"=>"","cond"=>"="    ),
),

'med_name'=>array(
	'control'=>array("Label"=>"Med name","name"=>"in_data[med_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"med_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.med_name","matchAllValue"=>"","cond"=>"like"    ),
),

'med_mid_name'=>array(
	'control'=>array("Label"=>"Med mid name","name"=>"in_data[med_mid_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"med_mid_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.med_mid_name","matchAllValue"=>"","cond"=>"like"    ),
),

'med_family_name'=>array(
	'control'=>array("Label"=>"Med family name","name"=>"in_data[med_family_name]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"med_family_name","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.med_family_name","matchAllValue"=>"","cond"=>"like"    ),
),

'med_address'=>array(
	'control'=>array("Label"=>"Med address","name"=>"in_data[med_address]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"med_address","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.med_address","matchAllValue"=>"","cond"=>"like"    ),
),

'pract_number'=>array(
	'control'=>array("Label"=>"Pract number","name"=>"in_data[pract_number]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"pract_number","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.pract_number","matchAllValue"=>"","cond"=>"like"    ),
),

'med_mobile_phone'=>array(
	'control'=>array("Label"=>"Med mobile phone","name"=>"in_data[med_mobile_phone]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"med_mobile_phone","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.med_mobile_phone","matchAllValue"=>"","cond"=>"like"    ),
),

'med_work_phone'=>array(
	'control'=>array("Label"=>"Med work phone","name"=>"in_data[med_work_phone]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"med_work_phone","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.med_work_phone","matchAllValue"=>"","cond"=>"like"    ),
),

'height'=>array(
	'control'=>array("Label"=>"Height","name"=>"in_data[height]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"height","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.height","matchAllValue"=>"","cond"=>"like"    ),
),

'weight'=>array(
	'control'=>array("Label"=>"Weight","name"=>"in_data[weight]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"weight","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.weight","matchAllValue"=>"","cond"=>"like"    ),
),

'left_eye_status'=>array(
	'control'=>array("Label"=>"Left eye status","name"=>"in_data[left_eye_status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"left_eye_status","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['eyes']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.left_eye_status","matchAllValue"=>"","cond"=>"="    ),
),

'left_eye_diopter'=>array(
	'control'=>array("Label"=>"Left eye diopter","name"=>"in_data[left_eye_diopter]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"left_eye_diopter","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.left_eye_diopter","matchAllValue"=>"","cond"=>"like"    ),
),

'right_eye_status'=>array(
	'control'=>array("Label"=>"Right eye status","name"=>"in_data[right_eye_status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"right_eye_status","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['eyes']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.right_eye_status","matchAllValue"=>"","cond"=>"="    ),
),

'right_eye_diopter'=>array(
	'control'=>array("Label"=>"Right eye diopter","name"=>"in_data[right_eye_diopter]","isHTML"=>false,"tagName"=>"Input","bound_field"=>"right_eye_diopter","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_VARCHAR,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.right_eye_diopter","matchAllValue"=>"","cond"=>"like"    ),
),

'left_ear_status'=>array(
	'control'=>array("Label"=>"Left ear status","name"=>"in_data[left_ear_status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"left_ear_status","userFunc"=>"","FormatString"=>"", "autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['ears']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.left_ear_status","matchAllValue"=>"","cond"=>"="    ),
),

'right_ear_status'=>array(
	'control'=>array("Label"=>"Right ear status","name"=>"in_data[right_ear_status]","isHTML"=>false,"tagName"=>"Select","bound_field"=>"right_ear_status","userFunc"=>"","FormatString"=>"","autoload"=>array("type"=>"arrayname","value"=>array("DataSource"=> $GLOBALS['ears']))),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.right_ear_status","matchAllValue"=>"","cond"=>"="    ),
),

'vision_details'=>array(
	'control'=>array("Label"=>"Vision details","name"=>"in_data[vision_details]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"vision_details","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.vision_details","matchAllValue"=>"","cond"=>"like"    ),
),

'hearing_details'=>array(
	'control'=>array("Label"=>"Hearing details","name"=>"in_data[hearing_details]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"hearing_details","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.hearing_details","matchAllValue"=>"","cond"=>"like"    ),
),

'food_allergy'=>array(
	'control'=>array("Label"=>"Food allergy","name"=>"in_data[food_allergy]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"food_allergy","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.food_allergy","matchAllValue"=>"","cond"=>"="    ),
),

'food_allergy_details'=>array(
	'control'=>array("Label"=>"Food allergy details","name"=>"in_data[food_allergy_details]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"food_allergy_details","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.food_allergy_details","matchAllValue"=>"","cond"=>"like"    ),
),

'drug_allergy'=>array(
	'control'=>array("Label"=>"Drug allergy","name"=>"in_data[drug_allergy]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"drug_allergy","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.drug_allergy","matchAllValue"=>"","cond"=>"="    ),
),

'drug_allergy_details'=>array(
	'control'=>array("Label"=>"Drug allergy details","name"=>"in_data[drug_allergy_details]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"drug_allergy_details","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.drug_allergy_details","matchAllValue"=>"","cond"=>"like"    ),
),

'astma'=>array(
	'control'=>array("Label"=>"Astma","name"=>"in_data[astma]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"astma","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.astma","matchAllValue"=>"","cond"=>"="    ),
),

'poliomelite'=>array(
	'control'=>array("Label"=>"Poliomelite","name"=>"in_data[poliomelite]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"poliomelite","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.poliomelite","matchAllValue"=>"","cond"=>"="    ),
),

'hepatitis'=>array(
	'control'=>array("Label"=>"Hepatitis","name"=>"in_data[hepatitis]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"hepatitis","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.hepatitis","matchAllValue"=>"","cond"=>"="    ),
),

'hyperactivity'=>array(
	'control'=>array("Label"=>"Hyperactivity","name"=>"in_data[hyperactivity]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"hyperactivity","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.hyperactivity","matchAllValue"=>"","cond"=>"="    ),
),

'teeth_problems'=>array(
	'control'=>array("Label"=>"Teeth problems","name"=>"in_data[teeth_problems]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"teeth_problems","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.teeth_problems","matchAllValue"=>"","cond"=>"="    ),
),
'epilepsy'=>array(
	'control'=>array("Label"=>"Epilepsy","name"=>"in_data[epilepsy]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"epilepsy","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.epilepsy","matchAllValue"=>"","cond"=>"="    ),
),


'pox'=>array(
	'control'=>array("Label"=>"Pox","name"=>"in_data[pox]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"pox","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.pox","matchAllValue"=>"","cond"=>"="    ),
),


'chronicle_disease'=>array(
	'control'=>array("Label"=>"Chronicle disease","name"=>"in_data[chronicle_disease]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"chronicle_disease","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.chronicle_disease","matchAllValue"=>"","cond"=>"="    ),
),


'autism'=>array(
	'control'=>array("Label"=>"Autism","name"=>"in_data[autism]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"autism","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.autism","matchAllValue"=>"","cond"=>"="    ),
),


'other'=>array(
	'control'=>array("Label"=>"Other","name"=>"in_data[other]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"other","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.other","matchAllValue"=>"","cond"=>"="    ),
),


'diabetis'=>array(
	'control'=>array("Label"=>"Diabetis","name"=>"in_data[diabetis]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"diabetis","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.diabetis","matchAllValue"=>"","cond"=>"="    ),
),


'tuberculosis'=>array(
	'control'=>array("Label"=>"Tuberculosis","name"=>"in_data[tuberculosis]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"tuberculosis","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.tuberculosis","matchAllValue"=>"","cond"=>"="    ),
),


'serious_injuries'=>array(
	'control'=>array("Label"=>"Serious injuries","name"=>"in_data[serious_injuries]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"serious_injuries","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.serious_injuries","matchAllValue"=>"","cond"=>"="    ),
),


'dislexia'=>array(
	'control'=>array("Label"=>"Dislexia","name"=>"in_data[dislexia]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"dislexia","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.dislexia","matchAllValue"=>"","cond"=>"="    ),
),


'anemia'=>array(
	'control'=>array("Label"=>"Anemia","name"=>"in_data[anemia]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"anemia","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.anemia","matchAllValue"=>"","cond"=>"="    ),
),


'heart_problems'=>array(
	'control'=>array("Label"=>"Heart problems","name"=>"in_data[heart_problems]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"heart_problems","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.heart_problems","matchAllValue"=>"","cond"=>"="    ),
),


'frequent_infections'=>array(
	'control'=>array("Label"=>"Frequent infections","name"=>"in_data[frequent_infections]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"frequent_infections","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.frequent_infections","matchAllValue"=>"","cond"=>"="    ),
),


'depression'=>array(
	'control'=>array("Label"=>"Depression","name"=>"in_data[depression]","states"=>array("on"=>1,"off"=>0),"isHTML"=>false,"tagName"=>"CheckBox","bound_field"=>"depression","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TINYINT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.depression","matchAllValue"=>"","cond"=>"="    ),
),


'other_details'=>array(
	'control'=>array("Label"=>"Other details","name"=>"in_data[other_details]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"other_details","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.other_details","matchAllValue"=>"","cond"=>"like"    ),
),
'notes'=>array(
		'control'=>array("Label"=>"Notes","name"=>"in_data[notes]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"notes","userFunc"=>"","FormatString"=>""),
		'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
		'search_data'=>array("search_name"=>"medical_forms.notes","matchAllValue"=>"","cond"=>"like"    ),
),

'contact_with_contagious'=>array(
	'control'=>array("Label"=>"Contact with contagious","name"=>"in_data[contact_with_contagious]","isHTML"=>false,"tagName"=>"TextArea","bound_field"=>"contact_with_contagious","userFunc"=>"","FormatString"=>""),
	'write_data'=>array("type"=>DATA_TEXT,"required"=>false,),
	'search_data'=>array("search_name"=>"medical_forms.contact_with_contagious","matchAllValue"=>"","cond"=>"like"    ),
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