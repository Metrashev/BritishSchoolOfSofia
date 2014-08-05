<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Event Calendar</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleEvent Calendar');"><?=$_COOKIE['toggleEvent Calendar']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleEvent Calendar" style="display:<?=$_COOKIE['toggleEvent Calendar'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="4">
<col width='15%'>
<col width='35%'>
<col width='35%'>
<col width='15%'>
</colgroup>
<tbody>
<tr>
<td></td>
<td class='td1'>
	<label for="title">Title</label>
	<ITTI field_name='title' style="margin-left: 10px; width:140px;"></ITTI>
</td>
<td class='td2'>
	<label onclick="document.getElementById('calendar_type').focus();">Calendar type</label>
	<ITTI field_name='calendar_type' style="margin-left: 10px; width:140px;"></ITTI>
</td>
<td></td>
</tr>
<tr>
<td></td>
<td class='td1'>
	<label onclick="document.getElementById('gallery_head_id').focus();">Gallery head id</label>
	<ITTI field_name='gallery_head_id' style="margin-left: 10px; width:142px;"></ITTI>
</td>
<td class='td2'>
	<label onclick="document.getElementById('event_category').focus();">Event category</label>
	<ITTI field_name='event_category' style="margin-left: 10px; width:140px;"></ITTI>
</td>
<td></td>
</tr>
<tr>
<td></td>
<td class="td3">
	<label onclick="document.getElementById('is_visible_up').focus();">Is visible up</label>
	<ITTI field_name='is_visible_up' style="margin-left: 10px; width:142px;"></ITTI>
</td>
<td class="td4">
	<label onclick="document.getElementById('is_visible_past').focus();">Is visible past</label>
	<ITTI field_name='is_visible_past' style="margin-left: 10px; width:140px;"></ITTI>
</td>
<td></td>
</tr>
	<tr>
		<td colspan="4" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>