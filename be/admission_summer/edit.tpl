<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Admission Summer</td>
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

<table cellpadding="5" cellspacing="0" class="table" align="left">
<colgroup span="4">
<col width='10%'>
<col width='40%'>
<col width='40%'>
<col width='10%'>
</colgroup>
<tbody>
<tr>
<td></td>
	<td class='td1'>
		<label for="first_name">Име</label>
		<ITTI field_name='first_name' class="elongate"></ITTI>
	</td>
	<td class="td1">
		<label for="p_first_name">Родител - Име</label>
		<ITTI field_name='p_first_name' class="elongate"></ITTI>
	</td>
<td></td>
</tr>
<tr>
<td></td>
<td class="td2">
		<label for="family_name">Фамилия</label>
		<ITTI field_name='family_name' class="elongate"></ITTI>
	</td>
	<td class="td2">
		<label for="p_family_name">Родител - Фамилия</label>
		<ITTI field_name='p_family_name' class="elongate"></ITTI>
	</td>
<td></td>
</tr>
<tr>
<td></td>
<td class="td3">
		<label for="egn">ЕГН/Номер паспорт</label>
		<ITTI field_name='egn' class="elongate"></ITTI>
	</td>	
<td class='td4'>
		<label for="p_phone">Телефон родител</label>
		<ITTI field_name='p_phone' class="elongate"></ITTI>	
	</td>
<td></td>
</tr>
<tr>
<td></td>
<td class='td4'>
		<label for="birthdate" style="height: 17px;">Дата на раждане</label>
		<ITTI field_name='birthdate' style="margin-left: 10px; width: 117px; vertical-align: top; margin-top: 2px;"></ITTI>
	</td>
<td class='td3'>
		<label for="p_email">Email</label>
		<ITTI field_name='p_email' class="elongate"></ITTI>
	</td>
<td></td>
</tr>
<tr>
<td></td>
<td class="td2">
		<label for="status_s">Приет</label>
		<ITTI field_name='status_s' class="formDropSize"></ITTI>
	</td>	
<td class="td1">
		<label for="tax">Платена такса</label>
		<ITTI field_name='tax_status_s' class="formDropSize"></ITTI>
	</td>
<td></td>
</tr>
<tr>
<td></td>
<td class="td3">
		<label for="period_1" style="width: 118px; background: #fff"><ITTI field_name='period_1'></ITTI> Период 1</label>
		<label for="period_2" style="width: 118px; margin-left: 10px;background: #fff "><ITTI field_name='period_2'></ITTI> Период 2</label>
	</td>
	<td class='td4'>
		<label for="period_3" style="width: 118px; background: #fff"><ITTI field_name='period_3'></ITTI> Период 3</label>
		<label for="period_4" style="width: 118px; margin-left: 10px; background: #fff"><ITTI field_name='period_4'></ITTI> Период 4</label>
	</td>
<td></td>
</tr>
	
	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" />
	</td></tr>
</tbody></table>
