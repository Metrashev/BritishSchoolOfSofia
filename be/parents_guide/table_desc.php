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
	'table'=>'parents_guide',
	'fields'=>'parents_guide.*',
	'order_fields'=>"parents_guide.id desc",
	'where'=>"",
	),
);

$xls=isset($_POST['dg_parents_guide_xls'])||$_POST['dg_parents_guidebt_print']==1?"_xls":"";

$ta_xml['template']=(dirname(__FILE__). '/table.tpl');
if(isset($__custom_where)) {
	$ta_xml['DataTable']['where']=$__custom_where;
}
$unique_id="dg_parents_guide";
$pagebar_id="pb_parents_guide";
?>