<html>
	<table id="dg_mq_mail_bulletins" class="test1 list_table" cellspacing="0" cellpadding="0" border="0">
	<thead>
	<tr class="list_header">
			<td in_index="1" id='_id'  field_name="id" class="header_add"><a href='<?=BE_DIR;?>mq_mail_bulletins/edit.php?<?=FE_Utils::getBackLink();?>'>New</a></td>
<td in_index="2"  id='_subject' field_name="subject"  class="header_nor"><a order="subject">Subject</a></td>
<td in_index="3"  id='_from_email' field_name="from_email"  class="header_nor"><a order="from_email">From email</a></td>

<td in_index="5"  id='_date_to_send' field_name="date_to_send"  class="header_nor"><a order="date_to_send">Sending initiation</a></td>

<td in_index="7"  id='_mail_group_id' field_name="mail_group_id"  class="header_nor"><a order="mail_group_id">Group e-mails</a></td>
<td in_index="8" id='t8' field_name="id"  class="delete" href='#'><a>Delete</a></td>
</tr>
	</thead>
	<tbody>
	<tr>
			<td>
<? if(!isset($_GET['search'])) { ?>
			<a field_name="id" style='color:red' href='<?=BE_DIR;?>mq_mail_bulletins/edit.php?id=_#VAL#_&amp;<?=FE_Utils::getBackLink();?>'>Edit</a>
		<?} else { ?>
			<input class="DataGridNew" userfunc="setCheckBox" type="hidden" name="_#CONTROL#_[fields][_hch_sel_][_#UNIQUE#_]" id="_#CONTROL#__hch_sel__#UNIQUE#_" value="" />
			<input type="checkbox" name="_#CONTROL#_[fields][_ch_sel_][_#UNIQUE#_]" onclick="document.getElementById('_#CONTROL#__hch_sel__#UNIQUE#_').value=this.checked?'1':'0'" value="1" />
		<? } ?>
		</td>
			<td><ITTI field_name="subject"   ></ITTI></td>
			<td><ITTI field_name="from_email"   ></ITTI></td>
			
			<td><ITTI field_name="date_to_send"   format="%d/%m/%Y %H:%i"></ITTI></td>
			<td><ITTI field_name="mail_group_id"  sql="select name from mq_mail_groups where id='_#VAL#_'" ></ITTI></td>
<td><a field_name="id" href='#' onclick='if(window.confirm("Are you shure?")) {document.getElementById("hdDeletemq_mail_bulletins").value="_#VAL#_";getParentFormElement(this).submit();} else return false;'>Delete</a></td>
</tr>
	</tbody>
	</table>
</html>