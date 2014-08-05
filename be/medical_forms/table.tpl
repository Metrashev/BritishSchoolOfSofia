<html>
	<table id="dg_medical_forms" class="test1 list_table" cellspacing="0" cellpadding="0" border="0">
	<thead>
	<tr class="list_header">
			<td in_index="1" id='_id'  field_name="id" class="header_add"></td>
<td in_index="2"  id='_student_id' field_name="student_id"  class="header_nor"><a order="student_id">Идентификационен номер</a></td>
<td in_index="3"  id='_s_first_name' field_name="s_first_name"  class="header_nor"><a order="s_first_name">Име</a></td>
<td in_index="4"  id='_s_family_name' field_name="s_family_name"  class="header_nor"><a order="s_family_name">Фамилия</a></td>
<td in_index="5"  id='_blood_test' field_name="blood_test"  class="header_nor"><a order="blood_test">Кръвен тест</a></td>
<td in_index="6"  id='_paraside_test' field_name="paraside_test"  class="header_nor"><a order="paraside_test">Тест за паразити</a></td>
<td in_index="14"  id='_height' field_name="height"  class="header_nor"><a order="height">Височина</a></td>
<td in_index="15"  id='_weight' field_name="weight"  class="header_nor"><a order="weight">Тегло</a></td>
<td in_index="33" id='t33' field_name="id"  class="delete" href='#'><a>Изтрий</a></td>
</tr>
	</thead>
	<tbody>
	<tr>
			<td>
<? if(!isset($_GET['search'])) { ?>
			<a field_name="id" style='color:red' href='<?=BE_DIR;?>medical_forms/edit.php?id=_#VAL#_&amp;<?=FE_Utils::getBackLink();?>'>Редакция</a>
		<?} else { 
			if($_GET['search']=='single') { ?>
			<a field_name="id" style='color:red' href="<?=htmlspecialchars($_GET['bkp']);?>&amp;return_key=_#VAL#_&amp;return_point=<?=$_GET['return_point'];?>">Избери</a>
		<?	} else { ?>
			<input class="DataGridNew" userfunc="setCheckBox" type="hidden" name="_#CONTROL#_[fields][_hch_sel_][_#UNIQUE#_]" id="_#CONTROL#__hch_sel__#UNIQUE#_" value="" />
			<input type="checkbox" name="_#CONTROL#_[fields][_ch_sel_][_#UNIQUE#_]" onclick="document.getElementById('_#CONTROL#__hch_sel__#UNIQUE#_').value=this.checked?'1':'0'" value="1" />
			<? } ?>
		<? } ?>
		</td>
			<td><ITTI field_name="student_id"   ></ITTI></td>
			<td><ITTI field_name="s_first_name"   ></ITTI></td>
			<td><ITTI field_name="s_family_name"   ></ITTI></td>
			<td><ITTI field_name="blood_test"  arrayname="yes_no" ></ITTI></td>
			<td><ITTI field_name="paraside_test"  arrayname="yes_no" ></ITTI></td>
			<td><ITTI field_name="height"   ></ITTI></td>
			<td><ITTI field_name="weight"   ></ITTI></td>
<td><a field_name="id" href='#' onclick='if(window.confirm("Сигурни ли сте?")) {document.getElementById("hdDeletemedical_forms").value="_#VAL#_";getParentFormElement(this).submit();} else return false;'>Изтрий</a></td>
</tr>
	</tbody>
	</table>
</html>