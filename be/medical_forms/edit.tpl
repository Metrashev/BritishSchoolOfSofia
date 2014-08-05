<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8"><table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Medical Forms</td>
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
<?php
$getParentInfo = getdb()->getOne("SELECT student_id FROM medical_forms WHERE id={$_GET['id']}");
$getParentInfo = getdb()->getRow("SELECT * FROM admission WHERE unique_id={$getParentInfo} ORDER BY id DESC");
$getParentInfo = unserialize($getParentInfo['serialized']);
?>
<table cellpadding="5" cellspacing="0" class="table" align="left">
<!-- <colgroup span="2">
<col width='50%'>
<col width='50%'> -->
</colgroup>
<tbody>

<tr>
	<td class="td1" valign="top">
		<div style="border: 1px solid #999; border-radius:5px; padding:8px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Данни за ученика</h2>
			<table cellspacing="0" cellpadding="0" style="width:100%">
				<tr>
 					<td style="width:150px"><p>Име: <label class="medicalForm"><?=$getParentInfo['fields']['s_first_name']?></label></p></td>
					<td style="width:150px"><p>Презиме: <label class="medicalForm"><?=$getParentInfo['fields']['s_mid_name'] ? $getParentInfo['fields']['s_mid_name'] : ' - '?></label></p></td>
				</tr>
				<tr>
					<td width="54%"><p>Фамилия:<label class="medicalForm"><?=$getParentInfo['fields']['s_family_name']?></label></p> </td>
					<td width="46%"><p><?=$getParentInfo['fields']['s_egn'] ? 'ЕГН' : 'Паспорт Но.'?>: <label class="medicalForm"><?=$getParentInfo['fields']['s_egn'] ? $getParentInfo['fields']['s_egn'] : $getParentInfo['fields']['passport_number']?></label></p> </td>
				</tr>
			</table>	
		</div>
	</td>
	<td class="td2" >
		<div style="border: 1px solid #999; border-radius:5px; padding:8px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Изследвания</h2>
			<table cellspacing="0" cellpadding="0" style="width:100%;">
				<tr>
					<td width="50%" style="padding-right:10px;" valign="top">
						<label class="labelMedicalForms"><ITTI field_name="blood_test"></ITTI>Изследвания на кръв и урина, извършени в едноседмичен срок преди постъпване на детето в детската градина</label>
					</td>
					</tr>
						<tr>
					<td width="50%">
						<label class="labelMedicalForms"><ITTI field_name="paraside_test"></ITTI>Еднократен отрицателен резултат от изследване за патогенни чревни бактерии и чревни паразити, извършено не по-рано от 15 дни преди постъпване на детето в детската градина</label>
					</td>
				</tr>
			</table>
		</div>
	</td>
</tr>
<tr>
	<td class="td1"  valign="top">
		<div style="border: 1px solid #999; border-radius:5px; padding:4px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Данни за бащата</h2>
			<table cellspacing="0" cellpadding="0" style="width:100%;">
				<tr>
					<td width="51%" class="medicalFormTd">Име: <label class="medicalForm"><?=$getParentInfo['father']['f_firstname'] ? $getParentInfo['father']['f_firstname'] : ' - '?></label></td>
					<td width="49%" class="medicalFormTd">Фамилия: <label class="medicalForm"><?=$getParentInfo['father']['f_family_name'] ? $getParentInfo['father']['f_family_name'] : ' - '?></label></td>
				</tr>
				<tr>
					<td width="51%" class="medicalFormTd">Моб. тел. : <label class="medicalForm"><?=$getParentInfo['father']['f_mobile_phone'] ? $getParentInfo['father']['f_mobile_phone'] : ' - '?></label></td>
					<td width="49%" class="medicalFormTd">Служ. тел. : <label class="medicalForm"><?=$getParentInfo['father']['f_work_phone'] ? $getParentInfo['father']['f_work_phone'] : ' - '?></label></td>
				</tr>
				<tr>
					<td width="51%" class="medicalFormTd">Email: <label class="medicalForm"><?=$getParentInfo['father']['f_email'] ? $getParentInfo['father']['f_email'] : ' - '?></label></td>
				</tr>
			</table>
		</div>
	</td>
	<td class="td2" valign="top">
		<div style="border: 1px solid #999; border-radius:5px; padding:4px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Данни за майката</h2>
			<table cellspacing="0" cellpadding="0" style="width:100%;">
				<tr>
					<td width="51%" class="medicalFormTd">Име: <label class="medicalForm"><?=$getParentInfo['mother']['m_firstname'] ? $getParentInfo['mother']['m_firstname'] : ' - '?></label></td>
					<td width="49%" class="medicalFormTd">Фамилия: <label class="medicalForm"><?=$getParentInfo['mother']['m_family_name'] ? $getParentInfo['mother']['m_family_name'] : ' - '?></label></td>
				</tr>
				<tr>
					<td width="51%" class="medicalFormTd">Моб. тел. : <label class="medicalForm"><?=$getParentInfo['mother']['m_mobile_phone'] ? $getParentInfo['mother']['m_mobile_phone'] : ' - '?></label></td>
					<td width="49%" class="medicalFormTd">Служ. тел. : <label class="medicalForm"><?=$getParentInfo['mother']['m_work_phone'] ? $getParentInfo['mother']['m_work_phone'] : ' - '?></label></td>
				</tr>
				<tr>
					<td width="51%" class="medicalFormTd">Email: <label class="medicalForm"><?=$getParentInfo['mother']['m_email'] ? $getParentInfo['mother']['m_email'] : ' - '?></label></td>
				</tr>
			</table>
		</div>
	</td>
</tr>
<tr>
	<td class="td1" valign="top">
		<div style="border: 1px solid #999; border-radius:5px; padding:4px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Данни за личния лекар</h2>
			<table cellspacing="0" cellpadding="0" style="width:100%; margin-left: 3px;">
			<colgroup span="3">
			<col width='33%'>
			<col width='33%'>
			<col width='33%'>
			</colgroup>
			<tbody>
				<tr>
					<td style="padding-bottom:10px;"><label class="medicalFormStatusLabel" for="med_name">Име: </label><br/><ITTI field_name='med_name' class="medField"></ITTI></td>
					<td style="padding-bottom:10px;"><label class="medicalFormStatusLabel" for="med_mid_name">Презиме:</label><br/><ITTI field_name='med_mid_name' class="medField"></td>
					<td style="padding-bottom:10px;"><label class="medicalFormStatusLabel" for="med_family_name">Фамилия:</label><br/><ITTI field_name='med_family_name' class="medField"></ITTI></td>
				</tr>
				<tr>
					<td><label class="medicalFormStatusLabel" for="pract_number">№ практика:</label><br/><ITTI field_name='pract_number' class="medField"></ITTI></td>
					<td><label class="medicalFormStatusLabel" for="med_mobile_phone">Моб. тел. :</label><br/><ITTI field_name='med_mobile_phone' class="medField"></ITTI></td>
					<td><label class="medicalFormStatusLabel" for="med_work_phone">Служ. тел. :</label><br/><ITTI field_name='med_work_phone' class="medField"></ITTI></td>
				</tr>
				<tr>
					<td colspan="3" style="padding:5px 0;"><label class="medicalFormStatusLabel" for="med_address">Адрес: </label><br/><ITTI field_name='med_address' rows="10" cols="69"></ITTI></td>
				</tr>
			</tbody>
			</table>
		</div>
	</td>
	<td class="td2" valign="top">
		<div style="border: 1px solid #999; border-radius:5px; padding:4px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Бележки</h2><br/>
			<ITTI field_name='notes' rows="17" cols="110"></ITTI>
		</div>
	</td>
</tr>
<tr>
	<td class="td1" valign="top">
		<div style="border: 1px solid #999; border-radius:5px; padding:4px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Общо състояние</h2>
			<table cellspacing="0" cellpadding="5" style="width:100%; margin-left: 15px;">
			<colgroup span="2">
			<col width='50%'>
			<col width='50%'>
			</colgroup>
			<tbody>
				<tr>
					<td><label for="height">Височина:</label><br/><ITTI field_name='height' class="medicalFormStatus"></ITTI></td>
					<td><label for="weight">Тегло:</label><br/><ITTI field_name='weight' class="medicalFormStatus"></ITTI></td>
				</tr>
				<tr><td colspan="2"><b>Зрение</b></td></tr>
				<tr>
					<td><label for="left_eye_status">Ляво око:</label> <ITTI field_name='left_eye_status' style="width:139px"></ITTI></td>
					<td><label for="left_eye_diopter">Диоптер:</label> <ITTI field_name='left_eye_diopter' class="medicalFormStatus"></ITTI></td>
				</tr>
				<tr>
					<td><label for="right_eye_status">Дясно око:</label> <ITTI field_name='right_eye_status' style="width:139px"></ITTI></td>
					<td><label for="right_eye_diopter">Диоптер:</label> <ITTI field_name='right_eye_diopter' class="medicalFormStatus"></ITTI></td>
				</tr>
				<tr>
					<td colspan="2"><label>Зрение - особености:</label><br/><ITTI field_name='vision_details' rows="8" cols="61"></ITTI></td>
				</tr>
				<tr><td colspan="2"><b>Слух</b></td></tr>
				<tr>
					<td><label for="left_ear_status">Ляво ухо:</label> <ITTI field_name='left_ear_status' style="width:139px"></ITTI></td>
					<td><label for="right_ear_status">Дясно ухо:</label> <ITTI field_name='right_ear_status' style="width:139px"></ITTI></td>
				</tr>
				<tr>
					<td colspan="2"><label>Слух - особености:</label><br/><ITTI field_name="hearing_details" rows="8" cols="61"></ITTI></td>
				</tr>
			</tbody>
			</table>
		</div>
		<div style="border: 1px solid #999; border-radius:5px; padding:6px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Контакт със заразно болни</h2>
			<label style="width: 325px;">Информация за контакт със заразно болни в момента:</label><br/>
			<ITTI field_name="contact_with_contagious" rows="8" cols="70"></ITTI>
		</div>
	</td>
	<td class="td2" valign="top">
		<div style="border: 1px solid #999; border-radius:5px; padding:4px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Алергии</h2>
			<table cellspacing="0" cellpadding="5" style="width:100%; margin-left: 15px;">
			<colgroup span="2">
			<col width='50%'>
			<col width='50%'>
			</colgroup>
			<tbody>
			<tr><td colspan="2"><b>Дали ученикът страда от някаква алергия от следните:</b></td></tr>
			<tr>
				<td><label style="background: #fff; width: 150px;" for="food_allergy"><ITTI field_name='food_allergy'></ITTI>Хранителна алергия</label></td>
				<td><label style="background: #fff; width: 150px;" for="drug_allergy"><ITTI field_name='drug_allergy'></ITTI>Лекарствена алергия</label></td>
			</tr>
			<tr>
				<td><label style="background: #fff; text-align: left;" for="food_allergy_details">Към какво:</label><br/><ITTI field_name='food_allergy_details' rows="9" cols="45"></ITTI></td>
				<td><label style="background: #fff; text-align: left;" for="drug_allergy_details">Към какво:</label><br/><ITTI field_name='drug_allergy_details' rows="9" cols="45"></ITTI></td>
			</tr>
			</tbody>
			</table>
		</div>
		<div style="border: 1px solid #999; border-radius:5px; padding:4px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">История на заболяванията</h2>
			<table cellspacing="0" cellpadding="5" style="width:100%; margin-left: 15px;">
			<colgroup span="3">
			<col width='33%'>
			<col width='33%'>
			<col width='33%'>
			</colgroup>
			<tbody>
				<tr>
					<td><label class="medicalFormCheck" for="astma"><ITTI field_name='astma'></ITTI> Астма</label></td>
					<td><label class="medicalFormCheck" for="poliomelite"><ITTI field_name='poliomelite'></ITTI> Полиомиелит</label></td>
					<td><label class="medicalFormCheck" for="hepatitis"><ITTI field_name='hepatitis'></ITTI> Хепатит</label></td>
				</tr>
				<tr>
					<td><label class="medicalFormCheck" for="hyperactivity"><ITTI field_name='hyperactivity'></ITTI> Хиперактивност и дефицит на внимание</label></td>
					<td><label class="medicalFormCheck" for="teeth_problems"><ITTI field_name='teeth_problems'></ITTI> Зъбни проблеми</label></td>
					<td><label class="medicalFormCheck" for="epilepsy"><ITTI field_name='epilepsy'></ITTI> Епилепсия</label></td>
				</tr>
				<tr>
					<td><label class="medicalFormCheck" for="pox"><ITTI field_name='pox'></ITTI> Шарка</label></td>
					<td><label class="medicalFormCheck" for="chronicle_disease"><ITTI field_name='chronicle_disease'></ITTI> Хронични заболявания</label></td>
					<td><label class="medicalFormCheck" for="autism"><ITTI field_name='autism'></ITTI> Аутизъм</label></td>
				</tr>
				<tr>
					<td><label class="medicalFormCheck" for="diabetis"><ITTI field_name='diabetis'></ITTI> Диабет</label></td>
					<td><label class="medicalFormCheck" for="tuberculosis"><ITTI field_name='tuberculosis'></ITTI> Туберкулоза</label></td>
					<td><label class="medicalFormCheck" for="serious_injuries"><ITTI field_name='serious_injuries'></ITTI> Сериозни наранявания</label></td>
				</tr>
				<tr>
					<td><label class="medicalFormCheck" for="dislexia"><ITTI field_name='dislexia'></ITTI> Дислексия</label></td>
					<td><label class="medicalFormCheck" for="anemia"><ITTI field_name='anemia'></ITTI> Анемия</label></td>
					<td><label class="medicalFormCheck" for="heart_problems"><ITTI field_name='heart_problems'></ITTI> Сърдечни проблеми</label></td>
				</tr>
				<tr>
					<td><label class="medicalFormCheck" for="frequent_infections"><ITTI field_name='frequent_infections'></ITTI> Чести инфекции</label></td>
					<td><label class="medicalFormCheck" for="depression"><ITTI field_name='depression'></ITTI> Депресия</label></td>
					<td><label class="medicalFormCheck" for="other"><ITTI field_name='other'></ITTI> Други</label></td>
				</tr>
				<tr><td colspan="3"><label style="width: 150px">Моля, дайте разяснения:</label><br/><br><ITTI field_name="other_details" rows="14" cols="100" style="margin-top: -10px;"></ITTI></td></tr>
			</tbody>
			</table>
		</div>			
	</td>
</tr>
<tr>
	<td class="td1" colspan="2">
		<div style="border: 1px solid #999; border-radius:5px; padding:4px; margin-bottom:10px;">
			<h2 style="display:block; margin:2px 0 10px 0;">Имунизационен статус</h2>
			<table cellspacing="0" cellpadding="5" style="width:100%; text-align:center;">
			<colgroup span="6">
			<col width='25%'>
			<col width='15%'>
			<col width='15%'>
			<col width='15%'>
			<col width='15%'>
			<col width='15%'>
			</colgroup>
			<tbody>
				<tr>
					<th>Имунизация</th><th>1ва</th><th>2ра</th><th>3та</th><th>4та</th><th>5та</th>
				</tr>
				<tr>
					<td>DTwP (дифтерия, тетанус, коклюш)</td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[dtwp1]" <?=$_POST['inj']['dtwp1'] ? 'checked="checked"' : ''?> value="1"/> 2 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[dtwp2]" <?=$_POST['inj']['dtwp2'] ? 'checked="checked"' : ''?> value="1"/> 3 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[dtwp3]" <?=$_POST['inj']['dtwp3'] ? 'checked="checked"' : ''?> value="1"/> 4 мес.</label></td>
				</tr>
				<tr>
					<td>DT (дифтерия, тетанус)</td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[dt1]" <?=$_POST['inj']['dt1'] ? 'checked="checked"' : ''?> value="1"/> 12 год.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[dt2]" <?=$_POST['inj']['dt2'] ? 'checked="checked"' : ''?> value="1"/> 17 год.</label></td>
				</tr>
				<tr>
					<td>Polio (полиомиелит)</td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[polio1]" <?=$_POST['inj']['polio1'] ? 'checked="checked"' : ''?> value="1"/> 2 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[polio2]" <?=$_POST['inj']['polio2'] ? 'checked="checked"' : ''?> value="1"/> 3 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[polio3]" <?=$_POST['inj']['polio3'] ? 'checked="checked"' : ''?> value="1"/> 4 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[polio4]" <?=$_POST['inj']['polio4'] ? 'checked="checked"' : ''?> value="1"/> 16 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[polio5]" <?=$_POST['inj']['polio5'] ? 'checked="checked"' : ''?> value="1"/> 6 год.</label></td>
				</tr>
				<tr>
					<td>Hepatitis B (хепатит В)</td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[hepatitis1]" <?=$_POST['inj']['hepatitis1'] ? 'checked="checked"' : ''?> value="1"/> 24 часа</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[hepatitis2]" <?=$_POST['inj']['hepatitis2'] ? 'checked="checked"' : ''?> value="1"/> 1 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[hepatitis3]" <?=$_POST['inj']['hepatitis3'] ? 'checked="checked"' : ''?> value="1"/> 6 мес.</label></td>
				</tr>
				<tr>
					<td>BCG (туберкулоза)</td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[bcg1]" <?=$_POST['inj']['bcg1'] ? 'checked="checked"' : ''?> value="1"/> 48 часа</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[bcg2]" <?=$_POST['inj']['bcg2'] ? 'checked="checked"' : ''?> value="1"/> 7 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[bcg3]" <?=$_POST['inj']['bcg3'] ? 'checked="checked"' : ''?> value="1"/> 7 год.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[bcg4]" <?=$_POST['inj']['bcg4'] ? 'checked="checked"' : ''?> value="1"/> 11 год.</label></td>					
				</tr>
				<tr>
					<td>MMR (морбили, заушки, рубеола)</td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[mmr1]" <?=$_POST['inj']['mmr1'] ? 'checked="checked"' : ''?> value="1"/> 13 мес.</label></td>
					<td><label class="medicalFormCheckStat"><input type="checkbox" name="inj[mmr2]" <?=$_POST['inj']['mmr2'] ? 'checked="checked"' : ''?> value="1"/> 12 год.</label></td>					
				</tr>
			</tbody>
			</table>
		</div>
	</td>
</tr>
	<tr>
		<td colspan="2" align="center" style="padding-right:10px;">
							<input type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input type="button" class="submit" onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" />
	</td></tr>
</tbody></table>
