<html>
	<table id="dg_event_calendar" class="test1 list_table" cellspacing="0" cellpadding="0" border="0">
	<thead>
	<tr class="list_header">
			<td in_index="1" id='_id'  field_name="id" class="header_add"><a href='<?=BE_DIR;?>event_calendar/edit.php?<?=FE_Utils::getBackLink();?>'>Нов</a></td>
<td in_index="2"  id='_title' field_name="title"  class="header_nor"><a order="title">Title</a></td>

<td in_index="4"  id='_calendar_type' field_name="calendar_type"  class="header_nor"><a order="calendar_type">Calendar type</a></td>
<td in_index="5"  id='_is_visible_up' field_name="is_visible_up"  class="header_nor"><a order="is_visible_up">Is visible up</a></td>
<td in_index="6"  id='_is_visible_past' field_name="is_visible_past"  class="header_nor"><a order="is_visible_past">Is visible past</a></td>

<td in_index="10"  id='_event_category' field_name="event_category"  class="header_nor"><a order="event_category">Event category</a></td>

<td in_index="12" id='t12' field_name="id"  class="delete" href='#'><a>Изтрий</a></td>
</tr>
	</thead>
	<tbody>
	<tr>
			<td>
<? if(!isset($_GET['search'])) { ?>
			<a field_name="id" style='color:red' href='<?=BE_DIR;?>event_calendar/edit.php?id=_#VAL#_&amp;<?=FE_Utils::getBackLink();?>'>Редакция</a>
		<?} else { 
			if($_GET['search']=='single') { ?>
			<a field_name="id" style='color:red' href="<?=htmlspecialchars($_GET['bkp']);?>&amp;return_key=_#VAL#_&amp;return_point=<?=$_GET['return_point'];?>">Избери</a>
		<?	} else { ?>
			<input class="DataGridNew" userfunc="setCheckBox" type="hidden" name="_#CONTROL#_[fields][_hch_sel_][_#UNIQUE#_]" id="_#CONTROL#__hch_sel__#UNIQUE#_" value="" />
			<input type="checkbox" name="_#CONTROL#_[fields][_ch_sel_][_#UNIQUE#_]" onclick="document.getElementById('_#CONTROL#__hch_sel__#UNIQUE#_').value=this.checked?'1':'0'" value="1" />
			<? } ?>
		<? } ?>
		</td>
			<td><ITTI field_name="title"   ></ITTI></td>

			<td><ITTI field_name="calendar_type" arrayname="calendar_categories" ></ITTI></td>
			<td><ITTI field_name="is_visible_up"  arrayname="yes_no" ></ITTI></td>
			<td><ITTI field_name="is_visible_past" arrayname="yes_no"  ></ITTI></td>

			<td><ITTI field_name="event_category"  arrayname="event_category" ></ITTI></td>

<td><a field_name="id" href='#' onclick='if(window.confirm("Сигурни ли сте?")) {document.getElementById("hdDeleteevent_calendar").value="_#VAL#_";getParentFormElement(this).submit();} else return false;'>Изтрий</a></td>
</tr>
	</tbody>
	</table>
</html>