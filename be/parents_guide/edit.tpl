<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">


<table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img
			src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Parents Guide</td>
		<td width="1" class="viewHeaderRight"><img
			src="<?=BE_IMG_DIR;?>design/header_r.png" /></td>
	</tr>
	<tr>
		<td class="viewList" colspan="3"><div style="height: 24px;">
				<div>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>Edit</td>
							<td align="right"><input type="submit" class="submit"
								name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input
								type="button" class="submit"
								onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
						</tr>
					</table>
				</div>
			</div></td>
	</tr>
</table>
<table cellpadding="5" cellspacing="0" class="table" align="center">
	<tbody>
		<tr>
			<td>
				<table cellpadding="5" cellspacing="0" align="center" border='0'>
					<tbody>

						<table>
							<tbody>
								<tr>
									<td style="width: 145px;"></td>
									<td><label
										onclick="document.getElementById('language').focus();">Language</label></td>
									<td><ITTI field_name='language'
											style="margin-left: 10px; width: 120px;"></ITTI></td>
									<td><label
										onclick="document.getElementById('class_type').focus();"
										style="margin-left: 30px">Class type</label></td>
									<td><ITTI field_name='class_type'
											style="margin-left: 10px; width: 120px"></ITTI></td>
									<td></td>
								</tr>
							</tbody>
						</table>

						<table>
							<tbody>
								<tr>
									<td style="width: 145px;"></td>
									<td><label for="title">Title</label></td>
									<td><ITTI field_name='title'
											style="margin-left: 10px; width: 117px;"></ITTI></td>
									<td><label for="subtitle" style="margin-left: 30px">Subtitle</label></td>
									<td><ITTI field_name='subtitle'
											style="margin-left: 10px; width: 120px"></ITTI></td>
									<td></td>
								</tr>
							</tbody>
						</table>

						<table>
							<tbody>
								<tr>
									<td style="width: 145px;"></td>
									<td><label for="picture">Picture</label><br /> <ITTI
											field_name='picture' style="width: 265px"></ITTI><br />
									<br /></td>
									</td>
									<td></td>
									<td style="vertical-align: top; padding-left: 28px;"><label
										for="due_date">Due date</label> <ITTI field_name='due_date'
											style="margin-left: 13px; width: 120px; vertical-align: top;"></ITTI><br />
										<ITTI field_name='is_visible'></ITTI> <label for="is_visible">Is
											visible</label></td>
									<td></td>
								</tr>
							</tbody>
						</table>

						<table>
							<tbody>
								<tr>
									<td style="vertical-align: top"><label for="body" >Body</label></td>
									<td><ITTI field_name='body' style="width:700px; height:500px;"></ITTI></td>
								</tr>
							</tbody>
						</table>
						<tr>
							<td colspan="2" align="center" style="padding-right: 10px;"><input
								type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input
								type="button" class="submit"
								onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
