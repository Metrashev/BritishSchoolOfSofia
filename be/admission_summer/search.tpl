<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Admission Summer</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleAdmission Summer');"><?=$_COOKIE['toggleAdmission Summer']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleAdmission Summer" style="display:<?=$_COOKIE['toggleAdmission Summer'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="left">
<colgroup span="4">
<col width='10%'>
<col width='40%'>
<col width='45%'>
<col width='5%'>
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
		<ITTI field_name='birthdate' style="margin-left: 10px; width: 117px; vertical-align: middle;"></ITTI>
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
		<label for="period_1" style="width: 118px; background: #fff"> Период 1<ITTI field_name='period_1' style="vertical-align: middle;"></ITTI></label>
		<label for="period_2" style="width: 118px; margin-left: 10px;background: #fff "> Период 2<ITTI field_name='period_2' style="vertical-align: middle;"></ITTI></label>
	</td>
	<td class='td4'>
		<label for="period_3" style="width: 118px; background: #fff"> Период 3<ITTI field_name='period_3' style="vertical-align: middle;"></ITTI></label>
		<label for="period_4" style="width: 118px; margin-left: 10px; background: #fff"> Период 4<ITTI field_name='period_4' style="vertical-align: middle;"></ITTI></label>
	</td>
<td></td>
</tr>
	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>