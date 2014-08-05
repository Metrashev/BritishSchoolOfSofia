<html>
	<table id="dg_contact_forms" class="test1 list_table" cellspacing="0" cellpadding="0" border="0">
	<thead>
	<tr class="list_header">
			<td in_index="1" id='_id'  field_name="id" class="header_add"><a href='<?=BE_DIR;?>contact_forms/edit.php?<?=FE_Utils::getBackLink();?>'>Нов</a></td>
<td in_index="2"  id='_parent_name' field_name="parent_name"  class="header_nor"><a order="parent_name">Parent name</a></td>
<td in_index="4"  id='_phone' field_name="phone"  class="header_nor"><a order="phone">Phone</a></td>
<td in_index="5"  id='_child_name' field_name="child_name"  class="header_nor"><a order="child_name">Child name</a></td>
<td in_index="6"  id='_grade' field_name="grade"  class="header_nor"><a order="grade">Grade</a></td>
<td in_index="7"  id='_message' field_name="message"  class="header_nor"><a order="message">Message</a></td>
<td in_index="8"  id='_submit_time' field_name="submit_time"  class="header_nor"><a order="submit_time">Submit time</a></td>
<td in_index="9"  id='_message_type' field_name="message_type"  class="header_nor"><a order="message_type">Message type</a></td>
<td in_index="10"  id='_status' field_name="status"  class="header_nor"><a order="status">Message status</a></td>
<td in_index="11" id='t11' field_name="id"  class="delete" href='#'><a>Изтрий</a></td>
</tr>
	</thead>
	<tbody>
	<tr>
			<td>
<? if(!isset($_GET['search'])) { ?>
			<a field_name="id" style='color:red' href='<?=BE_DIR;?>contact_forms/edit.php?id=_#VAL#_&amp;<?=FE_Utils::getBackLink();?>'>Редакция</a>
		<?} else { 
			if($_GET['search']=='single') { ?>
			<a field_name="id" style='color:red' href="<?=htmlspecialchars($_GET['bkp']);?>&amp;return_key=_#VAL#_&amp;return_point=<?=$_GET['return_point'];?>">Избери</a>
		<?	} else { ?>
			<input class="DataGridNew" userfunc="setCheckBox" type="hidden" name="_#CONTROL#_[fields][_hch_sel_][_#UNIQUE#_]" id="_#CONTROL#__hch_sel__#UNIQUE#_" value="" />
			<input type="checkbox" name="_#CONTROL#_[fields][_ch_sel_][_#UNIQUE#_]" onclick="document.getElementById('_#CONTROL#__hch_sel__#UNIQUE#_').value=this.checked?'1':'0'" value="1" />
			<? } ?>
		<? } ?>
		</td>
			<td><ITTI field_name="parent_name"   ></ITTI></td>
			<td><ITTI field_name="phone"   ></ITTI></td>
			<td><ITTI field_name="child_name"   ></ITTI></td>
			<td><ITTI field_name="grade"  arrayname="class_type"></ITTI></td>
			<td><ITTI field_name="message"   ></ITTI></td>
			<td><ITTI field_name="submit_time"   format="%d/%m/%Y"></ITTI></td>
			<td><ITTI field_name="message_type"  arrayname="msg_topic_be" ></ITTI></td>
			<td><ITTI field_name="status"  arrayname="answer_status" ></ITTI></td>
<td><a field_name="id" href='#' onclick='if(window.confirm("Сигурни ли сте?")) {document.getElementById("hdDeletecontact_forms").value="_#VAL#_";getParentFormElement(this).submit();} else return false;'>Изтрий</a></td>
</tr>
	</tbody>
	</table>
</html>