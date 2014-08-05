<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Academic Year</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleAcademic Year');"><?=$_COOKIE['toggleAcademic Year']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleAcademic Year" style="display:<?=$_COOKIE['toggleAcademic Year'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="2" width="0*">
<col width='50%'>
<col width='50%*'>
</colgroup>
<tbody><tr>
<td class='_tdl'><label for="current_year">Current year</label></td>
<td class='_tdr'><ITTI field_name='current_year'></ITTI></td>
</tr>
<tr>
<td class='_tdl'><label for="next_year">Next year</label></td>
<td class='_tdr'><ITTI field_name='next_year'></ITTI></td>
</tr>		
	<tr>
		<td colspan="2" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>