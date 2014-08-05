<html>
	<table id="dg_academic_year" class="test1 list_table" cellspacing="0" cellpadding="0" border="0">
	<thead>
	<tr class="list_header">
			<td in_index="1" id='_id'  field_name="id" class="header_add"><a href='<?=BE_DIR;?>academic_year/edit.php?<?=FE_Utils::getBackLink();?>'>Нов</a></td>
<td in_index="2"  id='_current_year' field_name="current_year"  class="header_nor"><a order="current_year">Current year</a></td>
<td in_index="3"  id='_next_year' field_name="next_year"  class="header_nor"><a order="next_year">Next year</a></td>
<td in_index="4" id='t4' field_name="id"  class="delete" href='#'><a>Изтрий</a></td>
</tr>
	</thead>
	<tbody>
	<tr>
			<td>
<? if(!isset($_GET['search'])) { ?>
			<a field_name="id" style='color:red' href='<?=BE_DIR;?>academic_year/edit.php?id=_#VAL#_&amp;<?=FE_Utils::getBackLink();?>'>Редакция</a>
		<?} else { 
			if($_GET['search']=='single') { ?>
			<a field_name="id" style='color:red' href="<?=htmlspecialchars($_GET['bkp']);?>&amp;return_key=_#VAL#_&amp;return_point=<?=$_GET['return_point'];?>">Избери</a>
		<?	} else { ?>
			<input class="DataGridNew" userfunc="setCheckBox" type="hidden" name="_#CONTROL#_[fields][_hch_sel_][_#UNIQUE#_]" id="_#CONTROL#__hch_sel__#UNIQUE#_" value="" />
			<input type="checkbox" name="_#CONTROL#_[fields][_ch_sel_][_#UNIQUE#_]" onclick="document.getElementById('_#CONTROL#__hch_sel__#UNIQUE#_').value=this.checked?'1':'0'" value="1" />
			<? } ?>
		<? } ?>
		</td>
			<td><ITTI field_name="current_year"   ></ITTI></td>
			<td><ITTI field_name="next_year"   ></ITTI></td>
<td><a field_name="id" href='#' onclick='if(window.confirm("Сигурни ли сте?")) {document.getElementById("hdDeleteacademic_year").value="_#VAL#_";getParentFormElement(this).submit();} else return false;'>Изтрий</a></td>
</tr>
	</tbody>
	</table>
</html>