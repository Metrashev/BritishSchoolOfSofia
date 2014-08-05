<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Event Calendar</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				<div>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Edit</td>
					<td align="right">				<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
				</tr>
			</table>
		</div> </div></td></tr>
</table>

<table cellpadding="5" cellspacing="0" class="table" style="border-bottom: none;"> <!--  align="center" border='0' -->
<tbody>
<tr>
<td style="width: 300px;">
	<label style="margin-left: 190px;" for="title">Title</label></td>
<td>
	<ITTI field_name='title' style="width: 450px; height: 13px;"></ITTI>
</td>
</tr>
</tbody></table>

<table cellpadding="5" cellspacing="0" class="table" style="border-bottom: none; border-top: none;"> <!--  align="center" border='0' -->
<tbody>
<tr>
<td style="width: 500px;">
	<label style="margin-left: 190px;" onclick="document.getElementById('calendar_type').focus();">Calendar type</label>
	<ITTI field_name='calendar_type' style="width:130px; margin-bottom: 5px; margin-left: 10px"></ITTI><br/>
</td>
<td><label style="margin-top: 5px;" onclick="document.getElementById('event_category').focus();">Event category</label>
	<ITTI field_name='event_category' style="width:130px; margin-bottom: 10px; margin-left: 10px; margin-top: 5px;"></ITTI></td>
</tr>
<tr>
<td style="width: 310px; padding-left: 195px;">
	<label  for="picture" style="margin-bottom: 5px; /* margin-left: 190px; */">Photo</label>
	<ITTI field_name='picture' style="width: 275px; /* margin-left: 186px; */"></ITTI>
</td>
<td></td>
</tr>
</tbody></table>


<table cellpadding="5" cellspacing="0" class="table" align="center" border='0' style="border-top: none">
<tr>
<td class='td1' colspan="2">
<div style="border: 1px solid #999; border-radius:5px; padding:5px;">
	<h2 style="display:block; margin:5px 0 ;">Upcoming event</h2>
	<div style="margin-left: 50px; margin-top: 20px; margin-right: 30px; float: left; "><label onclick="document.getElementById('is_visible_up').focus();">Is visible for upcoming</label> <ITTI field_name='is_visible_up' style="width:75px; margin-left:10px"></ITTI></div><br/><br/>
	<!-- <label for="upcoming_text"></label><br/> --><br/><div style="margin-top: -19px; margin-left: 50px; "><label onclick="document.getElementById('gallery_head_id').focus();">Gallery for upcoming</label> <ITTI field_name='gallery_head_id' style="width:75px; margin-left:10px; margin-bottom: 10px;"></ITTI></div><br/>
	<div style="margin-left: 50px"><ITTI field_name='upcoming_text' style="margin-left: 50px ;width:800px; height:250px;"></ITTI></div>
</div>
</td>
</tr>
<tr>
<td class='td1' colspan="2">
<div style="border: 1px solid #999; border-radius:5px; padding:5px;">
	<h2 style="display:block; margin:5px 0 ;">Past event</h2>
	
<div style="float: left">
	<div style="margin-left: 50px; margin-top: 20px; margin-right: 30px;">
		<label onclick="document.getElementById('is_visible_past').focus();">Is visible for past</label> 
		<ITTI field_name='is_visible_past' style="width: 75px; margin-left: 10px"></ITTI>
	</div><br/>
	<div style="margin-left: 50px">
		<label onclick="document.getElementById('gallery_head_id').focus();">Gallery for past</label> 
		<ITTI field_name='gallery_head_id_2' style="width:75px; margin-left:10px; margin-bottom: 10px;"></ITTI>
	</div>
</div>
<div class="shortDescription">
	<label for="short_description">Short description </label><br></br>
	<ITTI field_name='short_description' cols="80" rows="6" ></ITTI>
</div>
	<div style="margin-left: 50px"><ITTI field_name='past_text' style="width:800px; height:250px;"></ITTI></div><br/>
	
</div>
</td>
</tr>
<tr>
	<td colspan="2" style="padding-top:20px;">
		<div class="datePickerBox">
			<div style="padding:10px 10px 20px 75px;"><a id="calendarReset" style='cursor:pointer;color:#333;'>RESET CALENDAR</a></div>
			<div id="datepicker"></div>
			<input type="hidden" name="in_data[dates]" id="datepicker_dates" value="<?=$GLOBALS['array']['in_data']['dates'];?>" />
		</div>
	</td>
</tr>	
	<tr>
		<td colspan="2" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" />
	</td></tr>
</table>
