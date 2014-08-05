<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Subject Names</td>
		<td width="1" class="viewHeaderRight"><img src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>	
<tr><td  class="viewList" colspan="3"><div style="height:24px;"> 				Search <a href="#" style="display:block;width:20px;float:right;font-size:24px;font-weight:bold;" onclick="return toggleSearchTable(this,'toggleSubject Names');"><?=$_COOKIE['toggleSubject Names']=="none"?"+":"-";?></a></div></td></tr>
</table>
<div id="toggleSubject Names" style="display:<?=$_COOKIE['toggleSubject Names'];?>">
<table cellpadding="5" cellspacing="0" class="table" align="center" border='0'>
<colgroup span="4" width="0*">
<col width='40%'>
<col width='10%*'>
<col width='10%'>
<col width='40%*'>
</colgroup>
<tbody><tr>
<td></td>
<td class='_tdl'><label for="name_bg">Name bg</label></td>
<td class='_tdr'><ITTI field_name='name_bg'></ITTI></td>
<td></td>
</tr>
<tr>
<td></td>
<td class='_tdl'><label for="name_en">Name en</label></td>
<td class='_tdr'><ITTI field_name='name_en'></ITTI></td>
<td></td>
</tr>		
	<tr>
	<td></td>
		<td colspan="2" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="search" value="Търси" />&nbsp;&nbsp;&nbsp;<input type="submit" name='btClear' class="submit" value="Изчисти" />
	</td></tr>
</tbody></table>
</div>