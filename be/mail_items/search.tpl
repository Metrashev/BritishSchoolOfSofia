<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1"  class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Mail Items</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>
	<tr><td  class="viewList" colspan="3">				<div></div></td></tr>
</table>

<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="4" width="0*">
<col width='25%' align='right'>
<col width='25%' align='left'>
<col width='25%' align='right'>
<col width='25%*' align='left'>
</colgroup>
<tbody><tr>
<td><label for="subject">Subject</label></td>
<td><ITTI field_name='subject'></ITTI></td>
<td><label for="from_email">From email</label></td>
<td><ITTI field_name='from_email'></ITTI></td>
</tr>
<tr>
<td><label for="to_email">To email</label></td>
<td><ITTI field_name='to_email'></ITTI></td>
<td><label for="status_id">Status</label></td>
<td><ITTI field_name='status_id'></ITTI></td>

</tr>
<tr>
<td><label for="date_to_send">Date to send</label></td>
<td><ITTI field_name='date_to_send'></ITTI></td>
<td><label for="_to_date_to_send">to</label></td>
<td><ITTI field_name='_to_date_to_send'></ITTI></td>
</tr>		
	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Search" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Clear" />
	</td></tr>
</tbody></table>