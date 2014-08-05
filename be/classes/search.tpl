<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Classes</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleClasses');"><?=$_COOKIE['toggleClasses']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleClasses" style="display:<?=$_COOKIE['toggleClasses'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="3" width="0*">
<col width='35%'>
<col width='15%'>
<col width='15%'>
<col width='35%'>
</colgroup>
<tbody><tr>
<td></td>
<td class='_tdl'><label onclick="document.getElementById('class_type').focus();">Class type</label></td>
<td class='_tdr'><ITTI field_name='class_type' style="width: 160px"></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td class='_tdl'><label onclick="document.getElementById('paralelka').focus();">Class</label></td>
<td class='_tdr'><ITTI field_name='paralelka' style="width: 160px"></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td class='_tdl'><label onclick="document.getElementById('main_teacher').focus();">Main teacher</label></td>
<td class='_tdr'><ITTI field_name='main_teacher' style="width: 160px"></ITTI></td>
<td></td>
</tr>		
	<tr>
	<td></td>
		<td colspan="2" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>