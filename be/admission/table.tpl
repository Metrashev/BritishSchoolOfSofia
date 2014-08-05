<html>
	<table id="dg_admission" class="test1 list_table" cellspacing="0" cellpadding="0" border="0">
	<thead>
	<tr class="list_header">
			<td in_index="1" id='_id'  field_name="id" class="header_add"></td>
<td in_index="2"  id='_s_first_name' field_name="s_first_name"  class="header_nor"><a order="s_first_name">Student first name</a></td>
<td in_index="4"  id='_s_family_name' field_name="s_family_name"  class="header_nor"><a order="s_family_name">Student family name</a></td>
<td in_index="5"  id='_s_egn' field_name="s_egn"  class="header_nor"><a order="s_egn">ЕГН</a></td>
<td in_index="6"  id='_passport_number' field_name="passport_number"  class="header_nor"><a order="passport_number">Passport number</a></td>
<td in_index="7"  id='_academic_year' field_name="academic_year"  class="header_nor"><a order="academic_year">Academic year</a></td>
<td in_index="8"  id='_s_birthdate' field_name="s_birthdate"  class="header_nor"><a order="s_birthdate">Student birth year</a></td>
<td in_index="10"  id='_class_type' field_name="class_type"  class="header_nor"><a order="class_type">Class type</a></td>
<td in_index="11"  id='_transport' field_name="transport"  class="header_nor"><a order="transport">Transport</a></td>
<td in_index="12"  id='_payment_status' field_name="payment_status"  class="header_nor"><a order="payment_status">Payment status</a></td>
<td in_index="16"  id='_student_status' field_name="student_status"  class="header_nor"><a order="student_status">Student status</a></td>
<td in_index="13"  id='_lang_type' field_name="lang_type"  class="header_nor"><a order="lang_type">Form language version</a></td>
<td in_index="17"  id='_unique_id' field_name="unique_id"  class="header_nor"><a order="unique_id">Student ID</a></td>
<td in_index="15" id='t15' field_name="id"  class="delete" href='#'><a>Изтрий</a></td>
</tr>
	</thead>
	<tbody>
	<tr>
			<td>
<? if(!isset($_GET['search'])) { ?>
			<a field_name="id" style='color:red' href='<?=BE_DIR;?>admission/edit.php?id=_#VAL#_&amp;<?=FE_Utils::getBackLink();?>'>Редакция</a>
		<?} else { 
			if($_GET['search']=='single') { ?>
			<a field_name="id" style='color:red' href="<?=htmlspecialchars($_GET['bkp']);?>&amp;return_key=_#VAL#_&amp;return_point=<?=$_GET['return_point'];?>">Избери</a>
		<?	} else { ?>
			<input class="DataGridNew" userfunc="setCheckBox" type="hidden" name="_#CONTROL#_[fields][_hch_sel_][_#UNIQUE#_]" id="_#CONTROL#__hch_sel__#UNIQUE#_" value="" />
			<input type="checkbox" name="_#CONTROL#_[fields][_ch_sel_][_#UNIQUE#_]" onclick="document.getElementById('_#CONTROL#__hch_sel__#UNIQUE#_').value=this.checked?'yes':'no'" value="1" />
			<? } ?>
		<? } ?>
		</td>
			<td><ITTI field_name="s_first_name"   ></ITTI></td>
			<td><ITTI field_name="s_family_name"   ></ITTI></td>
			<td><ITTI field_name="s_egn"   ></ITTI></td>
			<td><ITTI field_name="passport_number"   ></ITTI></td>
			<td><ITTI field_name="academic_year"  ></ITTI></td>
			<td><ITTI field_name="s_birthdate"   format="%d/%m/%Y"></ITTI></td>
			<td><ITTI field_name="class_type" arrayname="class_type"></ITTI></td>
			<td><ITTI field_name="transport" arrayname="transport_status" ></ITTI></td>
			<td><ITTI field_name="payment_status"  arrayname="payment_status" ></ITTI></td>
			<td><ITTI field_name="student_status"  arrayname="student_status" ></ITTI></td>
			<td><ITTI field_name="lang_type"  arrayname="form_lang" ></ITTI></td>
			<td><ITTI field_name="unique_id" ></ITTI></td>
<td><a field_name="id" href='#' onclick='if(window.confirm("Сигурни ли сте?")) {document.getElementById("hdDeleteadmission").value="_#VAL#_";getParentFormElement(this).submit();} else return false;'>Изтрий</a></td>
</tr>
	</tbody>
	</table>
</html>