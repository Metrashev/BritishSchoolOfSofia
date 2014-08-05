<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1"  class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Users</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>
	<tr><td  class="viewList" colspan="3">				<div>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Edit</td>
					<td align="right">				<input type="submit" class="submit" name="btSave" value="Save" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
				</tr>
			</table>
		</div></td></tr>
</table>

<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="6" width="0*">
<col width='20%' align='right'>
<col width='15%' align='left'>
<col width='20%' align='right'>
<col width='15%*' align='left'>
<col width='10%' align='right'>
<col width='20%' align='left'>
</colgroup>
<tbody><tr>
<td></td>
<td><label for="name">Name</label></td>
<td><ITTI field_name='name' style="margin-left: 1px "></ITTI></td>
<td><label for="email">email</label></td>
<td><ITTI field_name='email'></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td><label for="username">User name</label></td>
<td><ITTI field_name='username'></ITTI></td>
<td><label for="userpass">Password</label></td>
<td><ITTI field_name='userpass'></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td><label for="is_active">Active</label></td>
<td><ITTI field_name='is_active' style="border: none; float:left"></ITTI></td>
<td><label onclick="document.getElementById('user_rights_id').focus();">Status</label></td>
<td><ITTI field_name='user_rights_id' style="width: 117px;"></ITTI></td>
<td></td>
</tr>		
	<tr>
	<td></td>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="btSave" value="Save" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" />
	</td></tr>
</tbody></table>