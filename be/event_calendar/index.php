<?php
ob_start();
require_once('../libCommon.php');
//Users::checkUserRights('Users');

if($__mvc) {
	require_once(dirname(__FILE__)."/../common/datagrid_controler.php");
	require_once(dirname(__FILE__)."/../common/search_controler.php");
	require_once(dirname(__FILE__)."/../common/mvc.php");
	
	$filter_session_name="filter_event_calendar";
}
else  {
	if(isset($_POST['ajax_params'])) {
		require_once(dirname(__FILE__).'/../common/ajax_params.php');
	}
	
	include(dirname(__FILE__).'/table_desc.php');
	
	include(dirname(__FILE__).'/controls.php');
	
	if(isset($in_edit_id)&&(int)$in_edit_id) {
		$search=array();
	}
	else {
		$filter_session_name="filter_event_calendar";
		$search=getevent_calendarControls('search');
	}
}


$__del_var="hdDeleteevent_calendar";
$__editTable="event_calendar";
$fn_Delete="";
$fn_Delete="del_event_calendar";

function del_event_calendar($del_id) {
	$db=getdb();
	require_once(dirname(__FILE__).'/controls.php');
	$con=getevent_calendarControls();
	ControlValues::deleteManagedImages($del_id,$con['controls'],false);	
	$db->execute("delete from `event_calendar` where id='{$del_id}'");
}

if($__mvc) {
	$mvc=new MVC($__editTable,$filter_session_name,"",$__del_var);
	$mvc->workpath=dirname(__FILE__);
	
	$mvc->is_multiform=isset($__render_grid_only);
	
	$mvc->has_data_grid=true;
	
	$mvc->autoprepare();
	
	$mvc->fn_Delete=$fn_Delete;
	
	$mvc->processDelete($fn_Delete);
	$mvc->processSelect();
	
	echo $mvc->render(isset($__skip_back_button));
}
else {
	include(dirname(__FILE__).'/../common/index.php');
}

ob_end_flush();
?>