<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Subjects</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleSubjects');"><?=$_COOKIE['toggleSubjects']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleSubjects" style="display:<?=$_COOKIE['toggleSubjects'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="2" width="0*">
<col width='40%'>
<col width='10%*'>
<col width='10%'>
<col width='40%*'>
</colgroup>
<tbody><tr>
<td></td>
<td class='_tdl'><label onclick="document.getElementById('name').focus();">Name</label></td>
<td class='_tdr'><ITTI field_name='name' style="width: 145px"></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td class='_tdl'><label onclick="document.getElementById('class_type').focus();">Class type</label></td>
<td class='_tdr'><ITTI field_name='class_type' style="width: 145px"></ITTI></td>
<td></td>
</tr>	
	<tr>
	<td></td>
		<td colspan="2" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>