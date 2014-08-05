<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Subjects</td>
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

<table cellpadding="5" cellspacing="0" style="border-top: none; border-bottom: none;" class="table"  align="center" border='0'>
	<tbody>
		<tr>
		<td style="padding-left: 160px; width: 310px; vertical-align: top;">
		<label onclick="document.getElementById('name').focus();">Name</label>
		<ITTI field_name='name' style="width:150px; margin-left: 10px"></ITTI><br/>
		<label style="margin-top: 10px;" onclick="document.getElementById('class_type').focus();">For which class ?</label>
		<ITTI field_name='class_type' style="width: 150px; margin-left: 10px; margin-top: 10px;"></ITTI><br/>
		<label style="margin-top: 10px;" for="invisible">Invisible</label>
		<ITTI field_name='invisible' style="border: none; float:left; margin-top: 12px; margin-left: 10px;"></ITTI>
		</td>
		<td>
		<label for="image" style="margin-bottom: 5px">Photo</label>
		<ITTI field_name='image' style="width: 295px"></ITTI>
		</td>
		</tr>	
	</tbody>
</table>


<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<tbody>
<tr>
<td class='td1'colspan="2">
	<label for="description_en">Description</label>
	<ITTI field_name='description_en' style="width:700px; height:700px;"></ITTI>
</td>
</tr>		
	<tr>
		<td colspan="2" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" />
	</td></tr>
</tbody></table>
