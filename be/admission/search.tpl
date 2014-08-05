<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Admission</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleAdmission');"><?=$_COOKIE['toggleAdmission']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleAdmission" style="display:<?=$_COOKIE['toggleAdmission'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="4">
<col width='15%'>
<col width='35%'>
<col width='35%'>
<col width='15%'>
</colgroup>
<tbody>

<tr>
<td >
	</td>
	<td class='td1'>
		<label for="s_first_name">Student first name</label>
		<ITTI field_name='s_first_name' class="formFieldSize"></ITTI>
	</td>
	<td class="td2">
		<label for="unique_id">Student ID</label>
		<ITTI field_name="unique_id" class="formFieldSize"></ITTI>
	</td>
<td>
	</td>
</tr>
<tr>
<td >
	</td>
	<td class="td2">
		<label for="s_family_name">Student family name</label>
		<ITTI field_name='s_family_name'class="formFieldSize"></ITTI>
	</td>
	<td class="td2">
		<label for="student_status">Student status</label>
		<ITTI field_name='student_status' class="formDropSize"></ITTI>
	</td>
<td>
	</td>
</tr>
<tr>
<td>
	</td>
	<td class="td3">
		<label for="s_egn">ЕГН</label>
		<ITTI field_name='s_egn' class="formFieldSize"></ITTI>
	</td>
	<td class='td1'>
		<label for="class_type">Class type</label>
		<ITTI field_name='class_type' class="formDropSize"></ITTI>
	</td>
<td>
	</td>
</tr>
<tr>
<td >
	</td>
	<td class='td3'>
		<label for="s_birthdate">Student Birth year</label>
		<ITTI field_name='s_birth_year' class="formFieldSize"></ITTI>
	</td>
	<td class="td3">
		<label for="payment_status">Payment status</label>
		<ITTI field_name='payment_status' class="formDropSize"></ITTI>
	</td>
<td>
	</td>
</tr>
<tr>
<td >
	</td>
	<td class='td4'>
		<label for="s_gender">Student gender</label>
		<ITTI field_name='s_gender' class="formDropSize"></ITTI>
	</td>
	<td class="td4">
		<label for="signing_agreement_s">Signing on Agreement</label>
		<ITTI field_name='signing_agreement_s' class="formDropSize"></ITTI>
	</td>
<td >
	</td>
</tr>
<tr>
<td>
	</td>
	<td class="td1">
		<label for="academic_year">Academic year</label>
		<ITTI field_name="academic_year" class="formFieldSize"></ITTI>
	</td>
	<td class='td2'>
		<label for="transport">Transport</label>
		<ITTI field_name='transport' class="formDropSize"></ITTI> 
	</td>
<td>
	</td>
</tr>
	
	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>