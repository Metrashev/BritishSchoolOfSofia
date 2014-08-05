<html>
	<table id="dg_parents_guide" class="test1 list_table" cellspacing="0" cellpadding="0" border="0">
	<thead>
	<tr class="list_header">
			<td in_index="1" id='_id'  field_name="id" class="header_add"><a href='<?=BE_DIR;?>parents_guide/edit.php?<?=FE_Utils::getBackLink();?>'>Нов</a></td>
<td in_index="4"  id='_language' field_name="language"  class="header_nor"><a order="language">Language</a></td>
<td in_index="5"  id='_category_type' field_name="category_type"  class="header_nor"><a order="class_type">Category type</a></td>
<td in_index="6"  id='_title' field_name="title"  class="header_nor"><a order="title">Title</a></td>
<td in_index="9"  id='_due_date' field_name="due_date"  class="header_nor"><a order="due_date">Due date</a></td>
<td in_index="10"  id='_is_visible' field_name="is_visible"  class="header_nor"><a order="is_visible">Is visible</a></td>
<td in_index="12" id='t12' field_name="id"  class="delete" href='#'><a>Изтрий</a></td>
</tr>
	</thead>
	<tbody>
	<tr>
			<td>
<? if(!isset($_GET['search'])) { ?>
			<a field_name="id" style='color:red' href='<?=BE_DIR;?>parents_guide/edit.php?id=_#VAL#_&amp;<?=FE_Utils::getBackLink();?>'>Редакция</a>
		<?} else { 
			if($_GET['search']=='single') { ?>
			<a field_name="id" style='color:red' href="<?=htmlspecialchars($_GET['bkp']);?>&amp;return_key=_#VAL#_&amp;return_point=<?=$_GET['return_point'];?>">Избери</a>
		<?	} else { ?>
			<input class="DataGridNew" userfunc="setCheckBox" type="hidden" name="_#CONTROL#_[fields][_hch_sel_][_#UNIQUE#_]" id="_#CONTROL#__hch_sel__#UNIQUE#_" value="" />
			<input type="checkbox" name="_#CONTROL#_[fields][_ch_sel_][_#UNIQUE#_]" onclick="document.getElementById('_#CONTROL#__hch_sel__#UNIQUE#_').value=this.checked?'1':'0'" value="1" />
			<? } ?>
		<? } ?>
		</td>
			<td><ITTI field_name="language"   ></ITTI></td>
			<td><ITTI field_name="class_type"  arrayname="class_type" ></ITTI></td>
			<td><ITTI field_name="title"   ></ITTI></td>
			<td><ITTI field_name="due_date"   format="%d/%m/%Y %H:%i"></ITTI></td>
			<td><ITTI field_name="is_visible"   ></ITTI></td>
<td><a field_name="id" href='#' onclick='if(window.confirm("Сигурни ли сте?")) {document.getElementById("hdDeleteparents_guide").value="_#VAL#_";getParentFormElement(this).submit();} else return false;'>Изтрий</a></td>
</tr>
	</tbody>
	</table>
</html>