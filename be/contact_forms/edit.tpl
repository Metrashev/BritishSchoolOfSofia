<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Contact Forms</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				<div>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Edit</td>
					<td align="right">				<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
				</tr>
			</table>
		</div> </div></td></tr>
</table>
<?php 
$currData = getdb()->getRow("SELECT * FROM contact_forms WHERE id={$_GET['id']}");
?>

<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="4">
<col width='3%'>
<col width='33%'>
<col width='33%'>
<col width='31%'>
<col width='0%'>
</colgroup>
<tbody>
<tr>
<td></td>
	<td class='td1'>
		<label for="parent_name"style="width: 110px">Parent name</label>
		<ITTI field_name='parent_name' class="formFieldSize"></ITTI>
	</td>
	<td class='td2'>
		<label for="email"style="width: 110px">Email</label>
		<ITTI field_name='email' class="formFieldSize"></ITTI>
	</td>
	<td class='td3'>
		<label for="phone"style="width: 110px">Phone</label>
		<ITTI field_name='phone' class="formFieldSize"></ITTI>
	</td>
<td></td>
</tr>
<tr>
<td></td>
	<td class='td1'>
		<label for="child_name" style="width: 110px">Child name</label>
		<ITTI field_name='child_name' class="formFieldSize"></ITTI>
	</td>
	<td class="td2">
		<label style="width: 110px" onclick="document.getElementById('grade').focus();">Grade</label>
		<ITTI field_name='grade' class="formDropSize"></ITTI>
	</td>
	<td class="td3">
		<label style="width: 110px" onclick="document.getElementById('message_type').focus();">Message type</label>
		<ITTI field_name='message_type' class="formDropSize"></ITTI>
	</td>
<td></td>
</tr>
<tr>
<td></td>
	<td class="td1">
		<label style="width: 110px" for="submit_time">Submit time</label>
		<ITTI field_name='submit_time'style="width:120px; margin-left:10px; vertical-align: top;"></ITTI>
	</td>
<td></td>
<td></td>
</tr>
<tr>
	<td class='td1' colspan="4" >
		<label for="message" style="width: 110px; margin-left: 25px;">Message</label>
		<ITTI field_name='message' style="margin-left: 10px" rows="10" cols="85"></ITTI>
	</td>
</tr>
<tr>
	<td class='td1' colspan="4" style="padding-top:20px;">
			<div style="border: 1px solid #999; border-radius:5px; padding:3px;">
				<h2 style="display:block; margin:2px 0 15px 0;">Answer Message Menu</h2>
				<div><p class="status" style="margin-left: 25px;">Message status: <label style="<?=$currData['status']==1 ? 'background:#FFF; text-align:center; display: inline; float: none; margin-left: 30px' : ''?> "><?=$GLOBALS['answer_status'][$currData['status']]?></label></p>
				<div><label style="margin-bottom: 5px; width: 130px;" for="subject">Mail subject</label><ITTI field_name='subject' style="width:130px; margin-left: 10px;"></ITTI></div><br/>
				<div><label style="margin-right: 10px" for="answer_msg">Answer message</label><ITTI field_name='answer_msg' style="width: 700px; height: 350px"></ITTI></div>
				<input type="submit" class="sendMsg" name="sendMsg" value="Send Message" style="margin: 15px 0px; width: 120px; height: 25px; font-size: 12px; float: right;"/>
			</div>
	</td>
</tr>		
	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" />
	</td></tr>
</tbody></table>
