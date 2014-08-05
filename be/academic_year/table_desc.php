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
	'table'=>'academic_year',
	'fields'=>'academic_year.*',
	'order_fields'=>"academic_year.id desc",
	'where'=>"",
	),
);

$xls=isset($_POST['dg_academic_year_xls'])||$_POST['dg_academic_yearbt_print']==1?"_xls":"";

$ta_xml['template']=(dirname(__FILE__). '/table.tpl');
if(isset($__custom_where)) {
	$ta_xml['DataTable']['where']=$__custom_where;
}
$unique_id="dg_academic_year";
$pagebar_id="pb_academic_year";
?>