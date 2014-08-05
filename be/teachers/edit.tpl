<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
<table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img
			src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Teachers</td>
		<td width="1" class="viewHeaderRight"><img
			src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>
	<tr>
		<td class="viewList" colspan="3"><div style="height: 24px;">
				<div>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>Edit</td>
							<td align="right"><input type="submit" class="submit"
								name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input
								type="button" class="submit"
								onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
						</tr>
					</table>
				</div>
			</div></td>
	</tr>
</table>

<table cellpadding="5" cellspacing="0" style="border-bottom: none;" class="table" align="center" border='0'>
	<colgroup span="3">
		<col width='15%'>
		<col width='32%'>
		<col width='51%'>
	</colgroup>
	<tbody>
		<tr>
		<td></td>
			<td style="margin-left:10px"><label for="name" style="margin-left: -5px;">Name bg</label> <ITTI field_name='name' style="margin-left:10px"></ITTI>
			</td>
			<td style="padding-left: 35px;"><label for="name_en">Name en</label> <ITTI field_name='name_en' style="margin-left:10px"></ITTI>
			</td>
		</tr>
	</tbody>
</table>


<table cellpadding="5" cellspacing="0" style="border-top: none; border-bottom: none;" class="table"  align="center" border='0'>
	<tbody>
		<tr>
			<td style="width: 265px; padding-left: 137px;"><label for="bkg" style="margin-top: 10px;">British Kindergarten</label>
				<ITTI field_name='bkg' style="margin-top: 12px;"></ITTI></td>
			<td style="width: 290px;"><label for="bss" style="margin-top: 10px;">British School</label>
				<ITTI field_name='bss' style="margin-top: 12px;"></ITTI></td>
			<td style="width: 500px;"><label for="bcs" style="margin-top: 10px;">British College</label>
				<ITTI field_name='bcs' style="margin-top: 12px;"></ITTI></td>
		</tr>	
	</tbody>
</table>

<table cellpadding="5" cellspacing="0" style="border-top: none; border-bottom: none;" class="table"  align="center" border='0'>
	<tbody>
		<tr>
			<td style="padding-left: 137px;">
		<label for="photo" style="margin-bottom: 5px; ">Photo</label> 
		<ITTI field_name='photo' style="width: 260px;"></ITTI>
		</td>
		</tr>	
	</tbody>
</table>

<table cellpadding="5" cellspacing="0" style="border-top: none; border-bottom: none;" class="table" align="center" border='0'>
	<colgroup span="2">
		<col width='10%'>
		<col width='90%'>
	</colgroup>
	<tbody>
		<tr>
			<td class='td1' colspan="2"><label for="full_description" style="width: 111px; /* margin-right: 10px; */">Full
					description bg</label> <ITTI field_name='full_description'
					style="width:700px; height:300px;"></ITTI></td>
		</tr>
		<tr>
			<td class='td1' colspan="2" style="margin-top: 30px; "><label
				for="full_description_en" style="width: 111px; /* margin-right: 10px; */">Full description en</label> <ITTI
					field_name='full_description_en' style="width:700px; height:300px;"></ITTI>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center" style="padding-right: 10px;"><input
				type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input
				type="button" class="submit"
				onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
		</tr>
	</tbody>
</table>
