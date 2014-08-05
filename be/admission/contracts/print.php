<?php
require_once('../../libCommon.php');
header('Content-Type: text/html; charset=utf-8');
$sId = (int)$_GET['id'];
$getRecord = getdb()->getRow("SELECT * FROM admission WHERE id={$sId}");
$parent_data = unserialize($getRecord['serialized']);

if($parent_data['father']['f_firstname']){
	$p_name = $parent_data['father']['f_firstname']." ".$parent_data['father']['f_family_name'];
	$p_phone = $parent_data['father']['f_mobile_phone'] ? $parent_data['father']['f_mobile_phone'] : '';
} elseif($parent_data['mother']['m_firstname']) {
	$p_name = $parent_data['mother']['m_firstname']." ".$parent_data['mother']['m_family_name'];
	$p_phone = $parent_data['mother']['m_mobile_phone'] ? $parent_data['mother']['m_mobile_phone'] : '';
} else {
	$p_name = $parent_data['g_firstname']." ".$parent_data['g_family_name'];
	$p_phone = $parent_data['g_mobile_phone'] ? $parent_data['g_mobile_phone'] : '';
}

$date = date('d.m.');

$s_name = $parent_data['fields']['s_first_name']." ".$parent_data['fields']['s_family_name'];
if($getRecord['lang_type']==0){
	$s_id = $parent_data['fields']['s_egn'];
	
} else {
	$s_id = $parent_data['fields']['passport_number'];
}

$s_birthdate = $parent_data['fields']['s_birthdate'];
$s_birthplace = $parent_data['serialized']['s_birthplace'] ? $parent_data['serialized']['s_birthplace'] : '';

$grade = $GLOBALS['class_type'][$parent_data['fields']['class_type']];
$s_tax_1 = $getRecord['tax_1'];


//$s_tax = $s_tax_1+$s_tax_2+$s_tax_3;

$translation = array(
	'{#DATE#}'=> $date,
	'{#P_NAME#}'=> $p_name,
	'{#P_PHONE#}'=> $p_phone,
	'{#S_NAME#}'=> $s_name,
	'{#S_ID#}'=> $s_id,
	'{#S_BIRTHDATE#}' => $s_birthdate,
	'{#S_BIRTHPLACE#}'=> $s_birthplace,
	'{#S_GRADE#}'=> $grade,
	'{#PAYMENT#}'=> $s_tax_1,
);
$lang_type = $getRecord['lang_type'] == 0 ? '' : '_en';
$contract = file_get_contents('./Contract_'.$getRecord['payment_method'].'Payments2013-2014'.$lang_type.'.htm');
$contract = str_replace(array_keys($translation), $translation, $contract);
echo $contract;
?>
<script type="text/javascript">
window.print();
</script>