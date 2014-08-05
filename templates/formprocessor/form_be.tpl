<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form method="POST" novalidate="novalidate">
<script type="text/javascript" src="/js/jquery-1.10.1.min.js"></script>
<link rel="stylesheet" href="/js/jquery-ui.css">
<script type="text/javascript" src="/js/jquery-ui.js"></script>

<script type="text/javascript">
  $(function() {
    $("#datepicker").datepicker({
 	  dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      yearRange: "1990:2014",
    });
  });

  $(function() {
	    $("#datepicker2").datepicker({
	      dateFormat: "yy-mm-dd",
	      changeMonth: true,
	      changeYear: true,
	      yearRange: "1920:2014",
	    });
  });

  $(function() {
	    $("#datepicker3").datepicker({
	      dateFormat: "yy-mm-dd",
	      changeMonth: true,
	      changeYear: true,
	      yearRange: "1920:2014",
	    });
});
  $(function() {
	    $("#datepicker4").datepicker({
	      dateFormat: "yy-mm-dd",
	      changeMonth: true,
	      changeYear: true,
	      yearRange: "1920:2014",
	    });
});

</script>

<table cellspacing="0" cellpadding="0" border="0" class="applyFormTbl" style="width:100%; margin-bottom:20px;">
<colgroup>
	<col width="50%" />
	<col width="50%" />
</colgroup>

	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['pupils_details']?></div></th></tr>
	<tr>
		<td class="td1" style="padding-top:10px;">
			<label for="s_first_name"><?=$form_tr['s_first_name']?>:</label>
			<input type="text" name="fields[s_first_name]" id="s_first_name" required="true"/>
		</td>
		<td class="td2" style="padding-top:10px;">
			<label for="s_mid_name"><?=$form_tr['s_mid_name']?>:</label>
			<input class="elongate" type="text" name="fields[s_mid_name]" id="s_mid_name"/>
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="s_family_name"><?=$form_tr['s_family_name']?>:</label>
			<input type="text" name="fields[s_family_name]" id="s_family_name" required="true" />
		</td>
		<td class="td2">
			<label for="gender"><?=$form_tr['gender']?>:</label>
			<select style="width: 203px" name="fields[s_gender]" id="gender" required="true">
				<option value=""></option>
				<option value="Male">Мъжки</option>
				<option value="Female">Женски</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="s_egn">ЕГН:</label>
			<input type="text" name="fields[s_egn]" id="s_egn" regexp="digits" regexp_msg="ЕГН трябва да има само цифри!" required="true" required_msg="ЕГН е задължително поле!"/>
		</td>
		<td class="td2">
			<label for="passport_number">Passport number:</label>
			<input type="text" name="fields[passport_number]" id="passport_number" regexp="digits" regexp_msg="Passport number has to have only digits!" required="true" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="1">
			<label for="datepicker"><?=$form_tr['birthdate']?>:</label>
			<input type="text" name="fields[s_birthdate]" id="datepicker" required="true" >
		</td>
		<td class="td2"><div style="clear:both"></div></td>
	</tr>
	<tr>
		<td class="td1">
			<label for="place_of_birth"><?=$form_tr['place_of_birth']?>:</label>
			<input class="elongate" type="text" name="serialized[s_birthplace]" id="place_of_birth" />
		</td>
		<td class="td2">
			<label for="nationality"><?=$form_tr['nationality']?>:</label>
			<input  class="elongate" type="text" name="serialized[s_nationality]" id="nationality" />
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="religion"><?=$form_tr['religion']?>:</label>
			<input class="elongate" type="text" name="serialized[s_religion]" id="religion" />
		</td>
		<td class="td2">
			<label for="s_class_type" onclick="document.getElementById('s_class_type').focus();"><?=$form_tr['grades']?>:</label>
			<select style="width: 200px" name="fields[class_type]" id="s_class_type" required="true">
				<?php
					foreach ($GLOBALS['class_type'] as $k=>$v) {
						echo "<option value='{$k}'>{$v}</option>";
					}
				?>
			</select>
		</td>
	</tr>

	<tr>
		<td class="td1" colspan="2" style="font-style:italic;">Латинските версии на имената на българските ученици.</td>
	</tr>
	<tr>
		<td class="td1" style="padding-top:10px;">
			<label for="s_first_name_latin"><?=$form_tr['s_first_name']?>:</label>
			<input type="text" name="serialized[s_first_name_latin]" id="s_first_name_latin" required="true" required_msg="{$required_tr['child_name']}{$isRequired}"/>
		</td>
		<td class="td2" style="padding-top:10px;">
			<label for="s_mid_name_latin"><?=$form_tr['s_mid_name']?>:</label>
			<input type="text" name="serialized[s_mid_name_latin]" id="s_mid_name_latin" required="true"/>
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="s_family_name_latin"><?=$form_tr['s_family_name']?>:</label>
			<input type="text" name="serialized[s_family_name_latin]" id="s_family_name_latin" required="true" required_msg="{$required_tr['child_family_name']}{$isRequired}"/>
		</td>
		<td class="td2"><div style="clear:both;"></div></td>
	</tr>

	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['general_info']?></div></th></tr>
	<tr>
		<td class="td1">
			<label style="width: 150px; margin-top: -5px; margin-right: 10px" for="first_lang"><?=$form_tr['first_lang']?></label>
			<input type="text" name="serialized[s_first_lang]" id="first_lang" />
		</td>
		<td class="td2">
			<label style="width: 150px; margin-right: 10px" for="lang_at_home"><?=$form_tr['lang_at_home']?></label>
			<input style="margin-top: 7px;" type="text" name="serialized[lang_at_home]" id="lang_at_home" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<label for="en_level"><?=$form_tr['en_level']?></label>
			<label><input type="radio" name="serialized[s_en_level]" value="Fluent" id="en_level" /> <?=$form_tr['fluent']?></label>
			<label><input type="radio" name="serialized[s_en_level]" value="Some" id="en_level" /><?=$form_tr['some']?></label>
			<label><input type="radio" name="serialized[s_en_level]" value="Minimal" id="en_level" /><?=$form_tr['minimal']?></label>
			<label><input type="radio" name="serialized[s_en_level]" value="None" id="en_level" /><?=$form_tr['none']?></label>
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label style="width: 160px; margin-top: 2px;" for="english_school"><?=$form_tr['english_school']?></label>
			<label><input type="radio" name="serialized[english_school]" value="Да" id="english_school" /> Да</label>
			<label><input type="radio" name="serialized[english_school]" value="Не" id="english_school" /> Не</label>
		</td>
		<td class="td2">
			<label style="width: 215px; margin-top: 3px;" for="child_count"><?=$form_tr['child_count']?></label>
			<input type="text" style="width:8%" name="serialized[child_count]" id="child_count" />
		</td>
	</tr>


	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['place_of_residence']?></div></th></tr>
	<tr>
		<td class="td1">
			<label for="city"><?=$form_tr['city']?>:</label>
			<input type="text" name="serialized[s_city]" id="city" />
		</td>
		<td class="td2">
			<label for="post_code"><?=$form_tr['post_code']?>:</label>
			<input type="text" name="serialized[s_post_code]" id="post_code" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<label for="residential_district"><?=$form_tr['district']?>:</label>
			<input type="text" name="serialized[s_district]" id="residential_district" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<label for="street"><?=$form_tr['street']?>:</label>
			<input type="text" name="serialized[s_street]" id="street" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<label for="s_apartment"><?=$form_tr['apartment']?>:</label>
			<input type="text" name="serialized[s_apartment]" id="s_apartment" />
		</td>
	</tr>

	<tr>
		<th class="thSpan" colspan="2"><div><?=$form_tr['father_details']?></div></th>
	</tr>
	<tr class="fatherToggle">
		<td class="td1">
			<label for="f_name"><?=$form_tr['s_first_name']?>:</label>
			<input type="text" name="father[f_firstname]" id="f_name" required="true" />
		</td>
		<td class="td2">
			<label for="f_midname"><?=$form_tr['s_mid_name']?>:</label>
			<input class="elongate" type="text" name="father[f_midname]" id="f_midname" />
		</td>
	</tr>
	<tr class="fatherToggle">
		<td class="td1">
			<label for="f_family_name"><?=$form_tr['s_family_name']?>:</label>
			<input type="text" name="father[f_family_name]" id="f_family_name" required="true"/>
		</td>
		<td class="td2">
			<label for="f_nationality"><?=$form_tr['nationality']?>:</label>
			<input class="elongate" type="text" name="father[f_nationality]" id="f_nationality" />
		</td>
	</tr>
	<tr class="fatherToggle">
		<td class="td1">
			<label for="datepicker2"><?=$form_tr['birthdate']?>:</label>
			<input class="elongate" type="text" name="father[f_birthdate]" id="datepicker2">
		</td>
		<td class="td2">
			<label for="f_native_lang"><?=$form_tr['mother_tongue']?>:</label>
			<input class="elongate" type="text" name="father[f_native_lang]" id="f_native_lang" />
		</td>
	</tr>
	<tr class="fatherToggle">
		<td class="td1">
			<label for="f_education"><?=$form_tr['education']?>:</label>
			<select style="margin-left: 10px; width: 180px; " name="father[f_education]" id="f_education">
				<option value=""></option>
				<option value="secondary"><?=$form_tr['secondary_education']?></option>
				<option value="university degree"><?=$form_tr['university_degree']?></option>
			</select>
		</td>
		<td class="td2">
			<label for="f_profession"><?=$form_tr['profession']?>:</label>
			<select style="width: 203px; margin-left: 10px" name="father[f_profession]" id="f_profession">
				<option value=""></option>
<?php
foreach($GLOBALS['professions']['bg'] as $k){
	echo "<option value='".$k."'>".$k."</option>";
}
?>
			</select>
		</td>
	</tr>
	<tr class="fatherToggle" >
		<td class="td1">
			<label for="f_company_name"><?=$form_tr['company_name']?>:</label>
			<input class="elongate" type="text" name="father[f_company_name]" id="f_company_name" />
		</td>
		<td class="td2">
			<label for="f_mobile_phone"><?=$form_tr['mobile_phone']?>:</label>
			<input type="text" name="father[f_mobile_phone]" id="f_mobile_phone" required="true"/>
		</td>
	</tr>
	<tr class="fatherToggle">
		<td class="td1">
			<label style="width:150px; margin-left: -20px;" for="f_work_phone"><?=$form_tr['work_phone']?>:</label>
			<input style="margin-left: 10px;" type="text" name="father[f_work_phone]" id="f_work_phone" />
		</td>
		<td class="td2">
			<label for="f_email"><?=$form_tr['email']?>:</label>
			<input type="text" name="father[f_email]" id="f_email" required="true" regexp="email"/>
		</td>
	</tr>
	<tr><td class="td1" colspan="2"></td></tr>
	<tr>
		<th class="thSpan" colspan="2"><div><?=$form_tr['mother_details']?></div></th>
	</tr>
	<tr class="motherToggle">
		<td class="td1">
			<label for="m_name"><?=$form_tr['s_first_name']?>:</label>
			<input type="text" name="mother[m_firstname]" id="m_name" required="true" />
		</td>
		<td class="td2">
			<label for="m_midname"><?=$form_tr['s_mid_name']?>:</label>
			<input class="elongate" type="text" name="mother[m_midname]" id="m_midname" />
		</td>
	</tr>
	<tr class="motherToggle">
		<td class="td1">
			<label for="m_family_name"><?=$form_tr['s_family_name']?>:</label>
			<input type="text" name="mother[m_family_name]" id="m_family_name" required="true" />
		</td>
		<td class="td2">
			<label for="m_nationality"><?=$form_tr['nationality']?>:</label>
			<input class="elongate" type="text" name="mother[m_nationality]" id="m_nationality" />
		</td>
	</tr>
	<tr class="motherToggle">
		<td class="td1">
			<label for="datepicker3"><?=$form_tr['birthdate']?>:</label>
			<input class="elongate" type="text" name="mother[m_birthdate]" id="datepicker3">
		</td>
		<td class="td2">
			<label for="m_native_lang"><?=$form_tr['mother_tongue']?>:</label>
			<input class="elongate" type="text" name="mother[m_native_lang]" id="m_native_lang" />
		</td>
	</tr>
	<tr class="motherToggle" >
		<td class="td1">
			<label for="m_education"><?=$form_tr['education']?>:</label>
			<select class="elongate" name="mother[m_education]" id="m_education">
				<option value=""></option>
				<option value="secondary"><?=$form_tr['secondary_education']?></option>
				<option value="university degree"><?=$form_tr['university_degree']?></option>
			</select>
		</td>
		<td class="td2">
			<label for="m_profession"><?=$form_tr['profession']?>:</label>
			<select style="margin-left: 10px; width: 203px" name="mother[m_profession]" id="m_profession">
				<option value=""></option>
<?php
foreach($GLOBALS['professions']['bg'] as $k){
	echo "<option value='".$k."'>".$k."</option>";
}
?>
			</select>
		</td>
	</tr>
	<tr class="motherToggle">
		<td class="td1">
			<label for="m_company_name"><?=$form_tr['company_name']?>:</label>
			<input style="margin-left: 10px" type="text" name="mother[m_company_name]" id="m_company_name" />
		</td>
		<td class="td2">
			<label for="m_mobile_phone"><?=$form_tr['mobile_phone']?>:</label>
			<input type="text" name="mother[m_mobile_phone]" id="m_mobile_phone" required="true" />
		</td>
	</tr>
	<tr class="motherToggle" >
		<td class="td1">
			<label style="width: 140px;"  for="m_work_phone"><?=$form_tr['work_phone']?>:</label>
			<input type="text" name="mother[m_work_phone]" id="m_work_phone" />
		</td>
		<td class="td2">
			<label for="m_email"><?=$form_tr['email']?>:</label>
			<input type="text" name="mother[m_email]" id="m_email" required="true" regexp="email" regexp_msg="<?=$required_tr['invalid']?> <?=$form_tr['email']?>"/>
		</td>
	</tr>

	<tr><td class="td1" colspan="2"></td></tr>

	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['guardian_details']?></div></th></tr>
	<tr class="guardianToggle" >
		<td class="td1">
			<label for="g_name"><?=$form_tr['s_first_name']?>:</label>
			<input class="tableGuardian" type="text" name="guardian[g_firstname]" id="g_name" required="true"  />
		</td>
		<td class="td2">
			<label for="g_midname"><?=$form_tr['s_mid_name']?>:</label>
			<input class="tableGuardian" type="text" name="guardian[g_midname]" id="g_midname" />
		</td>
	</tr>
	<tr class="guardianToggle">
		<td class="td1">
			<label for="g_family_name"><?=$form_tr['s_family_name']?>:</label>
			<input class="tableGuardian" type="text" name="guardian[g_family_name]" id="g_family_name" required="true" />
		</td>
		<td class="td2">
			<label for="g_nationality"><?=$form_tr['nationality']?>:</label>
			<input class="tableGuardian" type="text" name="guardian[g_nationality]" id="g_nationality" />
		</td>
	</tr>
	<tr class="guardianToggle">
		<td class="td1">
			<label for="datepicker4"><?=$form_tr['birthdate']?>:</label>
			<input class="tableGuardian2" type="text" name="guardian[g_birthdate]" id="datepicker4">
		</td>
		<td class="td2">
			<label for="g_native_lang"><?=$form_tr['mother_tongue']?>:</label>
			<input class="tableGuardian" type="text" name="guardian[g_native_lang]" id="g_native_lang" />
		</td>
	</tr>
	<tr class="guardianToggle" >
		<td class="td1">
			<label for="g_education"><?=$form_tr['education']?>:</label>
			<select class="tableGuardian2" name="guardian[g_education]" id="g_education">
				<option value=""></option>
				<option value="secondary"><?=$form_tr['secondary_education']?></option>
				<option value="university degree"><?=$form_tr['university_degree']?></option>
			</select>
		</td>
		<td class="td2">
			<label for="g_profession"><?=$form_tr['profession']?>:</label>
			<select class="tableGuardian" style="width: 203px" name="guardian[g_profession]" id="g_profession">
				<option value=""></option>
<?php
foreach($GLOBALS['professions']['bg'] as $k){
	echo "<option value='".$k."'>".$k."</option>";
}
?>
			</select>
		</td>
	</tr>
	<tr class="guardianToggle">
		<td class="td1">
			<label for="g_company_name"><?=$form_tr['company_name']?>:</label>
			<input class="tableGuardian2" type="text" name="guardian[g_company_name]" id="g_company_name" />
		</td>
		<td class="td2">
			<label for="g_mobile_phone"><?=$form_tr['mobile_phone']?></label>
			<input type="text" name="guardian[g_mobile_phone]" id="g_mobile_phone" required="true" />
		</td>
	</tr>
	<tr class="guardianToggle">
		<td class="td1">
			<label style="width: 150px" for="g_work_phone"><?=$form_tr['work_phone']?>:</label>
			<input type="text" name="guardian[g_work_phone]" id="g_work_phone" />
		</td>
		<td class="td2">
			<label for="g_email"><?=$form_tr['email']?>:</label>
			<input type="text" name="guardian[g_email]" id="g_email" required="true" regexp="email" regexp_msg="<?=$required_tr['invalid']?> <?=$form_tr['email']?>"/>
		</td>
	</tr>

	<tr><td class="td1" colspan="2"></td></tr>

	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['previous_schools']?></div></th></tr>
	<tr>
		<td class="td1">
			<label style="width: 150px;" for="previous_school"><?=$form_tr['previous_schools']?>:</label>
			<input type="text" name="serialized[previous_school]" id="previous_school" />
		</td>
		<td class="td2">
			<label style="width: 160px;" for="length_of_study"><?=$form_tr['length_of_study']?>:</label>
			<input style="margin-top: 10px;" type="text" name="serialized[lenght_of_study]" id="length_of_study" />
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label style="width: 148px; margin-top: -5px;" for="educational_system"><?=$form_tr['educational_system']?>:</label>
			<select style="width: 180px" name="serialized[educational_system]" id="educational_system">
				<option value=""></option>
<?php
foreach($GLOBALS['educational_systems']['bg'] as $k){
	echo "<option value='".$k."'>".$k."</option>";
}
?>
			</select>
		</td>
		<td class="td2">
			<label for="foreign_languages"><?=$form_tr['foreign_languages']?>:</label>
			<input style="margin-left: 30px;" type="text" name="serialized[foreign_languages]" id="foreign_languages" />
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label style="width: 150px;" for="web_page"><?=$form_tr['web_page']?>:</label>
			<input type="text" name="serialized[web_page]" id="web_page" />
		</td>
		<td class="td2">
			<label style="width: 150px;" for="grades_completed"><?=$form_tr['grades_completed']?>:</label>
			<input class="tableGuardian" type="text" name="serialized[grades_completed]" id="grades_completed" />
		</td>
	</tr>

	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['transport_details']?></div></th></tr>
	<tr>
		<td class="td1"><label style="width: 220px; margin-left: 17px"><input type="radio" name="fields[transport]" value="1" class="toggle"/> <?=$form_tr['transport_yes']?></label></td>
		<td class="td2"><label style="width: 240px; margin-left: 25px;"><input type="radio" name="fields[transport]" value="0" class="untoggle"/> <?=$form_tr['transport_no']?></label></td>
	</tr>
	<tr class="toggleTr">
		<td class="td1" >
			<label style="width: 220px;"><input type="radio" class="twoWay" name="serialized[transport_type]" value="Two way" /> <?=$form_tr['two_way_transport']?></label>
		</td>
		<td class="td2">
			<label style="width: 220px;"><input type="radio" class="morning" name="serialized[transport_type]" value="Morning" /> <?=$form_tr['morning_transport']?></label>
			<label style="width: 220px; margin-left: 7px; padding-top: 15px;"><input type="radio" class="afternoon" name="serialized[transport_type]" value="Afternoon" /> <?=$form_tr['afternoon_transport']?></label>
		</td>
	</tr>

	<tr class="togglePickup"><th class="thSpan" colspan="2"><div><?=$form_tr['pick_up_address']?></div></th></tr>
	<tr class="togglePickup">
		<td class="td1" colspan="2">
			<label for="address"><?=$form_tr['address']?>:</label>
			<textarea name="serialized[pickup_address]" rows="6" id="address"/>
		</td>
	</tr>
	<tr class="togglePickup">
		<td class="td1">
			<label for="contact_person"><?=$form_tr['contact_person']?>:</label>
			<input type="text" name="serialized[pickup_contact_person]" id="contact_person" />
		</td>
		<td class="td2">
			<label style="width: 150px; margin-right: 10px;" for="contact_phone"><?=$form_tr['contact_phone']?>:</label>
			<input type="text" name="serialized[pickup_contact_phone]" id="contact_phone"/>
		</td>
	</tr>

	<tr class="toggleDeliver"><th class="thSpan" colspan="2" ><div><?=$form_tr['deliver_address']?></div></th></tr>
	<tr class="toggleDeliver">
		<td class="td1" colspan="2" >
			<label for="address"><?=$form_tr['address']?>:</label>
			<textarea name="serialized[deliver_address]" rows="6" id="address"/>
		</td>
	</tr>
	<tr class="toggleDeliver">
		<td class="td1">
			<label for="contact_person"><?=$form_tr['contact_person']?>:</label>
			<input type="text" name="serialized[deliver_contact_person]" id="contact_person" />
		</td>
		<td class="td2">
			<label for="contact_phone" style="width: 150px; margin-right: 10px;"><?=$form_tr['contact_phone']?>:</label>
			<input type="text" name="serialized[deliver_contact_phone]" id="contact_phone"/>
		</td>
	</tr>

	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['how_did_you_learn']?></div></th></tr>
	<tr>
		<td class="td1"><input type="checkbox" name="info[billboards]" value="yes" /> <?=$form_tr['billboards']?></td>
		<td class="td2"><input type="checkbox" name="info[brochures]" value="yes" /> <?=$form_tr['brochures']?></td>
	</tr>
	<tr>
		<td class="td1"><input type="checkbox" name="info[internet]" value="yes" /> <?=$form_tr['internet']?></td>
		<td class="td2"><input type="checkbox" name="info[mailing]" value="yes" /> Mailing</td>
	</tr>
	<tr>
		<td class="td1"><input type="checkbox" name="info[advice]" value="yes" /> <?=$form_tr['advice']?></td>
		<td class="td2"><input type="checkbox" name="info[other_student]" value="yes" /> <?=$form_tr['other_student']?></td>
	</tr>
	<tr>
		<td class="td1"><input type="checkbox" name="info[newspaper]" value="yes" /> <?=$form_tr['newspaper']?></td>
		<td class="td2"><input type="checkbox" name="info[radio]" value="yes" /> <?=$form_tr['radio']?></td>
	</tr>
	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['expectations']?></div></th></tr>
	<tr>
		<td class="td1"><input type="checkbox" name="exp[proper_education]" value="yes" /> <?=$form_tr['proper_education']?></td>
		<td class="td2"><input type="checkbox" name="exp[activities]" value="yes" /> <?=$form_tr['activities']?></td>
	</tr>
	<tr>
		<td class="td1"><input type="checkbox" name="exp[look_after]" value="yes" /> <?=$form_tr['look_after']?></td>
		<td class="td2"><input type="checkbox" name="exp[sport]" value="yes" /> <?=$form_tr['sport']?></td>
	</tr>
	<tr>
		<td class="td1"><input type="checkbox" name="exp[high_diploma]" value="yes" /> <?=$form_tr['high_diploma']?></td>
		<td class="td2"><input type="checkbox" name="exp[arts]" value="yes" /> <?=$form_tr['arts']?></td>
	</tr>
	<tr>
		<td class="td1"><input type="checkbox" name="exp[manners]" value="yes" /> <?=$form_tr['manners']?></td>
		<td class="td2"><input type="checkbox" name="exp[study_langs]" value="yes" /> <?=$form_tr['study_langs']?></td>
	</tr>
