<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Teachers</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleTeachers');"><?=$_COOKIE['toggleTeachers']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleTeachers" style="display:<?=$_COOKIE['toggleTeachers'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="4" width="0*">
<col width='40%'>
<col width='10%'>
<col width='10%'>
<col width='40%*'>
</colgroup>
<tbody>
<tr>
<td></td>
<td class='_tdl'><label for="name">Name</label></td>
<td class='_tdr'><ITTI field_name='name' style="width: 118px;"></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td class='_tdl'><label for="bkg_s">British Kindergarten</label></td>
<td class='_tdr'><ITTI field_name='bkg_s' style="width: 120px"></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td class='_tdl'><label for="bss_s">British School</label></td>
<td class='_tdr'><ITTI field_name='bkg_s' style="width: 120px"></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td class='_tdl'><label for="bcs_s">British College</label></td>
<td class='_tdr'><ITTI field_name='bkg_s' style="width: 120px"></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td class='_tdl'><label for="full_description">Full description</label></td>
<td class='_tdr'><ITTI field_name='full_description' style="width: 115px"></ITTI></td>
<td></td>
</tr>
	<tr>
	<td></td>
		<td colspan="2" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>