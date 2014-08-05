<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1"  class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Users</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>
	<tr><td  class="viewList" colspan="3">				<div></div></td></tr>
</table>

<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="6" width="0*">
<col width='30%' align='right'>
<col width='10%' align='left'>
<col width='10%' align='right'>
<col width='10%' align='left'>
<col width='10%' align='right'>
<col width='30%' align='left'>
</colgroup>
<tbody><tr>
<td></td>
<td><label for="name">Name</label></td>
<td><ITTI field_name='name'></ITTI></td>
<td><label onclick="document.getElementById('user_rights_id').focus();">Status</label></td>
<td><ITTI field_name='user_rights_id' style="width: 115px"></ITTI></td>
<td></td>
</tr>		
	<tr>
	<td></td>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Search" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Clear" />
	</td></tr>
</tbody></table>