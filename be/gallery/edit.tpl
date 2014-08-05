<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">

<table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft" ><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Gallery</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>
	<tr><td  class="viewList" colspan="4"><div>Edit</div></td></tr>
</table>

<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="3" width="0*">
<col width='35%' align='right'>
<col width='10%' align='left'>
<col width='20%' align='right'>
<col width='35%' align='right'>
</colgroup>
<tbody>
<tr>
<td></td>
<td><label style="height: 30px; text-align: center; padding-top: 20px;" for="img">Picture</label></td>
<td><ITTI field_name='img'></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td><label style="height: 20px; text-align: center; padding-top: 10px;" for="order_field">Order</label></td>
<td><ITTI field_name='order_field' style="width: 240px"></ITTI><br />(leave blank or 0 to add as a last)</td>
<td></td>
</tr>		
<tr>
<td></td>
<td><label for="text">Text</label></td>
<td colspan="3"><ITTI field_name='text' style="width:240px"></ITTI></td>
<td></td>
</tr>		

<?php
if(!empty($GLOBALS['_LANGUAGE_COLS'])) {
	foreach ($GLOBALS['_LANGUAGE_COLS'] as $k=>$v) {
		echo <<<EOD
		<tr>
<td><label for="{$k}">{$v}</label></td>
<td colspan="3"><ITTI field_name='{$k}' style="width:92%"></ITTI></td>
</tr>	
EOD;
	}
}
?>

	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input class="submit" type="submit" name="btSave" value="Save" />&nbsp;&nbsp;&nbsp;<input class="submit" type="button" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" />
	</td></tr>
</tbody></table>