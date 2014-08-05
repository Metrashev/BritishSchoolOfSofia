<?php

$ta_xml=array(
'columns'=>array(
	'header'=>'',
	
),
/*'excel_options'=>array(
	'skip_columns'=>array("id","_h_id"),
	'add_index'=>true,
),
'hasExcelExport'=>true,*/
//'OnItemDataBound'=>'chCap',
//'OnOrderChange'=>'fn_order_change',
//'OnBeforeItemDataBound'=>"loadRowData",
'page_size'=>25,
'DataTable'=>array(
	'table'=>'subject_names',
	'fields'=>'subject_names.*',
	'order_fields'=>"subject_names.id desc",
	'where'=>"",
	),
);

$xls=isset($_POST['dg_subject_names_xls'])||$_POST['dg_subject_namesbt_print']==1?"_xls":"";

$ta_xml['template']=(dirname(__FILE__). '/table.tpl');
if(isset($__custom_where)) {
	$ta_xml['DataTable']['where']=$__custom_where;
}
$unique_id="dg_subject_names";
$pagebar_id="pb_subject_names";
?>