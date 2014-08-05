<html>
	<table id="dg_admission_summer" class="test1 list_table" cellspacing="0" cellpadding="0" border="0">
	<thead>
	<tr class="list_header">
			<td in_index="1" id='_id'  field_name="id" class="header_add"><a href='<?=BE_DIR;?>admission_summer/edit.php?<?=FE_Utils::getBackLink();?>'>Нов</a></td>
<td in_index="2"  id='_first_name' field_name="first_name"  class="header_nor"><a order="first_name">Име</a></td>
<td in_index="4"  id='_family_name' field_name="family_name"  class="header_nor"><a order="family_name">Фамилия</a></td>
<td in_index="5"  id='_egn' field_name="egn"  class="header_nor"><a order="egn">ЕГН</a></td>
<td in_index="6"  id='_submit_date' field_name="submit_date"  class="header_nor"><a order="submit_date">Submit date</a></td>
<td in_index="12"  id='_p_first_name' field_name="p_first_name"  class="header_nor"><a order="p_first_name">Родител - име</a></td>
<td in_index="18"  id='_status' field_name="status"  class="header_nor"><a order="status">Статус</a></td>
<td in_index="20"  id='_tax_status' field_name="tax_status"  class="header_nor"><a order="tax_status">Статус плащане</a></td>
<td in_index="21" id='t21' field_name="id"  class="delete" href='#'><a>Изтрий</a></td>
</tr>
	</thead>
	<tbody>
	<tr>
			<td>
<? if(!isset($_GET['search'])) { ?>
			<a field_name="id" style='color:red' href='<?=BE_DIR;?>admission_summer/edit.php?id=_#VAL#_&amp;<?=FE_Utils::getBackLink();?>'>Редакция</a>
		<?} else { 
			if($_GET['search']=='single') { ?>
			<a field_name="id" style='color:red' href="<?=htmlspecialchars($_GET['bkp']);?>&amp;return_key=_#VAL#_&amp;return_point=<?=$_GET['return_point'];?>">Избери</a>
		<?	} else { ?>
			<input class="DataGridNew" userfunc="setCheckBox" type="hidden" name="_#CONTROL#_[fields][_hch_sel_][_#UNIQUE#_]" id="_#CONTROL#__hch_sel__#UNIQUE#_" value="" />
			<input type="checkbox" name="_#CONTROL#_[fields][_ch_sel_][_#UNIQUE#_]" onclick="document.getElementById('_#CONTROL#__hch_sel__#UNIQUE#_').value=this.checked?'1':'0'" value="1" />
			<? } ?>
		<? } ?>
		</td>
			<td><ITTI field_name="first_name"   ></ITTI></td>
			<td><ITTI field_name="family_name"   ></ITTI></td>
			<td><ITTI field_name="egn"   ></ITTI></td>
			<td><ITTI field_name="submit_date"   format="%d/%m/%Y"></ITTI></td>
			<td><ITTI field_name="p_first_name"   ></ITTI></td>
			<td><ITTI field_name="status"  arrayname="summer_status" ></ITTI></td>
			<td><ITTI field_name="tax_status"  arrayname="yes_no" ></ITTI></td>
<td><a field_name="id" href='#' onclick='if(window.confirm("Сигурни ли сте?")) {document.getElementById("hdDeleteadmission_summer").value="_#VAL#_";getParentFormElement(this).submit();} else return false;'>Изтрий</a></td>
</tr>
	</tbody>
	</table>
</html>