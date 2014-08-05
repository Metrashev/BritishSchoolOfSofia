<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Contact Forms</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleContact Forms');"><?=$_COOKIE['toggleContact Forms']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleContact Forms" style="display:<?=$_COOKIE['toggleContact Forms'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="4">
<col width='15%'>
<col width='35%'>
<col width='35%'>
<col width='15%'>
</colgroup>
<tbody>
<tr>
<td></td>
	<td class='td1'>
		<label for="parent_name">Parent name</label>
		<ITTI field_name='parent_name' class="elongate"></ITTI>
	</td>
	<td class='td4'>
		<label for="child_name">Child name</label>
		<ITTI field_name='child_name' class="elongate"></ITTI>
	</td>
<td></td>
</tr>
<tr>
<td></td>
	<td class='td3'>
		<label for="phone">Phone</label>
		<ITTI field_name='phone' class="elongate"></ITTI>
	</td>
	<td class="td1">
		<label onclick="document.getElementById('grade').focus();">Grade</label>
		<ITTI field_name='grade' class="formDropSize"></ITTI>
	</td>
<td></td>
</tr>
<tr>
<td></td>
	<td class='td2'>
		<label for="email">Email</label>
		<ITTI field_name='email' class="elongate"></ITTI>
	</td>
	<td class="td2">
		<label onclick="document.getElementById('message_type').focus();">Message type</label>
		<ITTI field_name='message_type' class="formDropSize"></ITTI>
	</td>
<td></td>	
</tr>
<tr>
	<td></td>
	<td class="td3">
		<label for="status">Message status</label>
		<ITTI field_name='status' class="formDropSize"></ITTI>
	</td>
	<td></td>
	<td></td>
</tr>		
	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>