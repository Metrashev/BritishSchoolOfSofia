<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form method="POST" novalidate="novalidate">
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
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

$(document).ready(function(){
	$('input.toggle').click(function(){
		if($('tr.toggleTr td').css('display')=='none'){
			$('tr.toggleTr td').toggle(300, function(){});
		}
	});

	$('input.untoggle').click(function(){
		if($('tr.toggleTr td').css('display')=='table-cell'){
			$('tr.toggleTr td').toggle(300,function(){});
		}

		if($('tr.togglePickup td').css('display')=='table-cell'){
			$('tr.togglePickup td').toggle(400, function(){});
			$('tr.togglePickup th').toggle(400, function(){});
		}

		if($('tr.toggleDeliver td').css('display')=='table-cell'){
			$('tr.toggleDeliver td').toggle(400, function(){});
			$('tr.toggleDeliver th').toggle(400, function(){});
		}
	});

	$('input.twoWay').click(function(){
		if($('tr.togglePickup td').css('display')=='none'){
			$('tr.togglePickup th').toggle(300,function(){});
			$('tr.togglePickup td').toggle(300,function(){});
		}

		if($('tr.toggleDeliver td').css('display')=='none'){
			$('tr.toggleDeliver th').toggle(300,function(){});
			$('tr.toggleDeliver td').toggle(300,function(){});
		}
	});

	$('input.morning').click(function(){
		if($('tr.togglePickup td').css('display')=='none'){
			$('tr.togglePickup th').toggle(300,function(){});
			$('tr.togglePickup td').toggle(300,function(){});
		}

		if($('tr.toggleDeliver td').css('display')=='table-cell'){
			$('tr.toggleDeliver th').toggle(300,function(){});
			$('tr.toggleDeliver td').toggle(300,function(){});
		}
	});

	$('input.afternoon').click(function(){
		if($('tr.toggleDeliver td').css('display')=='none'){
			$('tr.toggleDeliver th').toggle(300,function(){});
			$('tr.toggleDeliver td').toggle(300,function(){});
		}

		if($('tr.togglePickup td').css('display')=='table-cell'){
			$('tr.togglePickup th').toggle(300,function(){});
			$('tr.togglePickup td').toggle(300,function(){});
		}
	});

	$('input.f_toggle').click(function(){
		if($('tr.fatherToggle').css('display')=='none'){
			$('tr.fatherToggle').toggle(300,function(){});
		} else if($('tr.fatherToggle').css('display')=='table-row'){
			$('tr.fatherToggle').toggle(300,function(){});
		}
	});

	$('input.m_toggle').click(function(){
		if($('tr.motherToggle').css('display')=='none'){
			$('tr.motherToggle').toggle(300,function(){});
		} else if($('tr.motherToggle').css('display')=='table-row'){
			$('tr.motherToggle').toggle(300,function(){});
		}
	});

	$('input.g_toggle').click(function(){
		if($('tr.guardianToggle').css('display')=='none'){
			$('tr.guardianToggle').fadeIn(300,function(){});
		} else if($('tr.guardianToggle').css('display')=='table-row'){
			$('tr.guardianToggle').fadeOut(300,function(){});
		}
	});
});
</script>
<?php
$isRequired = LNG_CURRENT==LNG_BG ? ' е задължително поле!' : ' is a required field!';
?>
<div style="display:none;"><input type="text" name="fields[unique_id]" value="<?=$_POST['unique_id']?>" /></div>
<div style="display:none;"><input type="text" name="fields[student_status]" value="<?=$_POST['student_status']?>" /></div>
<table cellspacing="0" cellpadding="0" border="0" class="applyFormTbl" style="width:100%; margin-bottom:20px;">
<colgroup>
	<col width="50%" />
	<col width="50%" />
</colgroup>
	
	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['pupils_details']?></div></th></tr>
	<tr>
		<td class="td1" style="padding-top:10px;">
			<label for="s_first_name"><?=$form_tr['s_first_name']?>:</label><br />
			<input type="text" name="fields[s_first_name]" id="s_first_name" required="true" required_msg="<?=$required_tr['child_name']?><?=$isRequired?>"/>
		</td>
		<td class="td2" style="padding-top:10px;">
			<label for="s_mid_name"><?=$form_tr['s_mid_name']?>:</label><br />
			<input type="text" name="fields[s_mid_name]" id="s_mid_name" />
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="s_family_name"><?=$form_tr['s_family_name']?>:</label><br />
			<input type="text" name="fields[s_family_name]" id="s_family_name" required="true" required_msg="<?=$required_tr['child_family_name']?><?=$isRequired?>"/>
		</td>
		<td class="td2">
			<label for="gender"><?=$form_tr['gender']?>:</label><br />
			<select name="fields[s_gender]" id="gender" required="true" required_msg="<?=$form_tr['gender']?><?=$isRequired?>">
				<option value=""></option>
				<option value="Male"><?=LNG_CURRENT==LNG_BG ? 'Мъжки' : 'Male'?></option>
				<option value="Female"><?=LNG_CURRENT==LNG_BG ? 'Женски' : 'Female'?></option>
			</select>
		</td>
	</tr>
	<tr>
	<?php
if(LNG_CURRENT==LNG_BG){
	echo <<<EOD
		<td class="td1">
			<label for="s_egn">ЕГН:</label><br />
			<input type="text" name="fields[s_egn]" id="s_egn" regexp="digits" regexp_msg="ЕГН трябва да има само цифри!" required="true" required_msg="ЕГН е задължително поле!"/>
		</td>
EOD;
} else {
	echo <<<EOD
		<td class="td1">
			<label for="passport_number">Passport number:</label><br />
			<input type="text" name="fields[passport_number]" id="passport_number" regexp="digits" regexp_msg="Passport number has to have only digits!" required="true" required_msg="Passport number is a required field!"/>
		</td>
EOD;
}
?>
		<td class="td2">
			<label for="datepicker"><?=$form_tr['birthdate']?>:</label><br />
			<input type="text" name="fields[s_birthdate]" id="datepicker" required="true" required_msg="<?=$required_tr['student_birthdate']?><?=$isRequired?>">
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="place_of_birth"><?=$form_tr['place_of_birth']?>:</label><br />
			<input type="text" name="serialized[s_birthplace]" id="place_of_birth" />
		</td>
		<td class="td2">
			<label for="nationality"><?=$form_tr['nationality']?>:</label><br />
			<input type="text" name="serialized[s_nationality]" id="nationality" />
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="religion"><?=$form_tr['religion']?>:</label><br />
			<input type="text" name="serialized[s_religion]" id="religion" />
		</td>
		<td class="td2"><div style="clear:both"></div></td>
	</tr>
	<tr>
		<td class="td1">
			<label  for="academic_year"><?=$form_tr['academic_year']?></label><br/>
			<select name="fields[academic_year]" id="academic_year" required="true" required_msg="<?=$form_tr['academic_year']?><?=$isRequired?>">
				<option value=""></option>
				<?php
					$getYears = getdb()->getRow("SELECT * FROM academic_year WHERE id=1");
					echo "<option value='".$getYears['current_year']."'>".$getYears['current_year']."</option>";
					echo "<option value='".$getYears['next_year']."'>".$getYears['next_year']."</option>";
				?>
			</select>
		</td>
		<td class="td2">
			<label for="s_class_type" onclick="document.getElementById('s_class_type').focus();"><?=$form_tr['grades']?>:</label><br />
			<select name="fields[class_type]" id="s_class_type" required="true" required_msg="<?=$form_tr['grades']?><?=$isRequired?>">
				<?php
					foreach ($GLOBALS['class_type'] as $k=>$v) {
						echo "<option value='{$k}'>{$v}</option>";
					}
				?>
			</select>
		</td>
	</tr>
<?php
	if(LNG_CURRENT==LNG_BG){
		echo <<<EOD
			<tr>
				<td class="td1" colspan="2" style="font-style:italic;">Моля попълнете имената на ученика на латиница както са изписани в паспорта.</td>
			</tr>
			<tr>
				<td class="td1" style="padding-top:10px;">
					<label for="s_first_name_latin">{$form_tr['s_first_name']}:</label><br />
					<input type="text" name="serialized[s_first_name_latin]" id="s_first_name_latin" required="true" required_msg="{$required_tr['child_name']}{$isRequired}"/>
				</td>
				<td class="td2" style="padding-top:10px;">
					<label for="s_mid_name_latin">{$form_tr['s_mid_name']}:</label><br />
					<input type="text" name="serialized[s_mid_name_latin]" id="s_mid_name_latin" required="true"/>
				</td>
			</tr>
			<tr>
				<td class="td1" colspan="2">
					<label for="s_family_name_latin">{$form_tr['s_family_name']}:</label><br />
					<input type="text" style="width:36%;" name="serialized[s_family_name_latin]" id="s_family_name_latin" required="true" required_msg="{$required_tr['child_family_name']}{$isRequired}"/>
				</td>
			</tr>
EOD;
	}
?>
	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['general_info']?></div></th></tr>
	<tr>
		<td class="td1">
			<label for="first_lang"><?=$form_tr['first_lang']?></label><br />
			<input type="text" name="serialized[s_first_lang]" id="first_lang" />
		</td>
		<td class="td2">
			<label for="lang_at_home"><?=$form_tr['lang_at_home']?></label><br />
			<input type="text" name="serialized[lang_at_home]" id="lang_at_home" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<label for="en_level"><?=$form_tr['en_level']?></label><br />
			<label><input type="radio" name="serialized[s_en_level]" value="Fluent" id="en_level" /> <?=$form_tr['fluent']?></label>
			<label><input type="radio" name="serialized[s_en_level]" value="Some" id="en_level" /> <?=$form_tr['some']?></label>
			<label><input type="radio" name="serialized[s_en_level]" value="Minimal" id="en_level" /><?=$form_tr['minimal']?></label>
			<label><input type="radio" name="serialized[s_en_level]" value="None" id="en_level" /> <?=$form_tr['none']?></label>
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="english_school"><?=$form_tr['english_school']?></label><br />
			<label><input type="radio" name="serialized[english_school]" value="Да" id="english_school" /> <?=LNG_CURRENT==LNG_BG ? 'Да' : 'Yes'?></label>
			<label><input type="radio" name="serialized[english_school]" value="Не" id="english_school" /> <?=LNG_CURRENT==LNG_BG ? 'Не' : 'No'?></label>
		</td>
		<td class="td2">
			<label for="child_count"><?=$form_tr['child_count']?></label><br />
			<input type="text" name="serialized[child_count]" id="child_count" />
		</td>
	</tr>


	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['place_of_residence']?></div></th></tr>
	<tr>
		<td class="td1">
			<label for="city"><?=$form_tr['city']?>:</label><br />
			<input type="text" name="serialized[s_city]" id="city" />
		</td>
		<td class="td2">
			<label for="post_code"><?=$form_tr['post_code']?>:</label><br />
			<input type="text" name="serialized[s_post_code]" id="post_code" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<label for="residential_district"><?=$form_tr['district']?>:</label><br />
			<input type="text" name="serialized[s_district]" id="residential_district" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<label for="street"><?=$form_tr['street']?>:</label><br />
			<input type="text" name="serialized[s_street]" id="street" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<label for="s_apartment"><?=$form_tr['apartment']?>:</label><br />
			<input type="text" name="serialized[s_apartment]" id="s_apartment" />
		</td>
	</tr>

	<tr>
		<th class="thSpan" colspan="2"><div><input type="checkbox" name="f_det" value="1" class="f_toggle" style="float:left;"/><?=$form_tr['father_details']?></div></th>
	</tr>
	<tr class="fatherToggle" style="<?=$_POST['f_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="f_name"><?=$form_tr['s_first_name']?>:</label><br />
			<input type="text" name="father[f_firstname]" id="f_name" required="true" required_msg="<?=$required_tr['father_name']?><?=$isRequired?>"/>
		</td>
		<td class="td2">
			<label for="f_midname"><?=$form_tr['s_mid_name']?>:</label><br />
			<input type="text" name="father[f_midname]" id="f_midname" />
		</td>
	</tr>
	<tr class="fatherToggle" style="<?=$_POST['f_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="f_family_name"><?=$form_tr['s_family_name']?>:</label><br />
			<input type="text" name="father[f_family_name]" id="f_family_name" required="true" required_msg="<?=$required_tr['father_family_name']?><?=$isRequired?>"/>
		</td>
		<td class="td2">
			<label for="f_nationality"><?=$form_tr['nationality']?>:</label><br />
			<input type="text" name="father[f_nationality]" id="f_nationality" />
		</td>
	</tr>
	<tr class="fatherToggle" style="<?=$_POST['f_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="datepicker2"><?=$form_tr['birthdate']?>:</label><br />
			<input type="text" name="father[f_birthdate]" id="datepicker2">
		</td>
		<td class="td2">
			<label for="f_native_lang"><?=$form_tr['mother_tongue']?>:</label><br />
			<input type="text" name="father[f_native_lang]" id="f_native_lang" />
		</td>
	</tr>
	<tr class="fatherToggle" style="<?=$_POST['f_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="f_education"><?=$form_tr['education']?>:</label><br/>
			<select name="father[f_education]" id="f_education">
				<option value=""></option>
				<option value="secondary"><?=$form_tr['secondary_education']?></option>
				<option value="university degree"><?=$form_tr['university_degree']?></option>
			</select>
		</td>
		<td class="td2">
			<label for="f_profession"><?=$form_tr['profession']?>:</label><br />
			<select name="father[f_profession]" id="f_profession">
				<option value=""></option>
<?php
foreach($GLOBALS['professions'][LNG_CURRENT] as $k){
	echo "<option value='".$k."'>".$k."</option>";
}
?>
			</select>
		</td>
	</tr>
	<tr class="fatherToggle" style="<?=$_POST['f_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="f_company_name"><?=$form_tr['company_name']?>:</label><br />
			<input type="text" name="father[f_company_name]" id="f_company_name" />
		</td>
		<td class="td2">
			<label for="f_mobile_phone"><?=$form_tr['mobile_phone']?>:</label>
			<input type="text" name="father[f_mobile_phone]" id="f_mobile_phone" required="true" required_msg="<?=$form_tr['mobile_phone']?><?=$isRequired?>"/>
		</td>
	</tr>
	<tr class="fatherToggle" style="<?=$_POST['f_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="f_work_phone"><?=$form_tr['work_phone']?>:</label><br />
			<input type="text" name="father[f_work_phone]" id="f_work_phone" />
		</td>
		<td class="td2">
			<label for="f_email"><?=$form_tr['email']?>:</label><br />
			<input type="text" name="father[f_email]" id="f_email" required="true" regexp="email" regexp_msg="<?=$required_tr['invalid']?> <?=$form_tr['email']?>" required_msg="<?=$form_tr['email']?><?=$isRequired?>"/>
		</td>
	</tr>
	<tr><td class="td1" colspan="2"></td></tr>
	<tr>
		<th class="thSpan" colspan="2"><div><input type="checkbox" name="m_det" value="1" class="m_toggle" style="float:left;"/><?=$form_tr['mother_details']?></div></th>
	</tr>
	<tr class="motherToggle" style="<?=$_POST['m_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="m_name"><?=$form_tr['s_first_name']?>:</label><br />
			<input type="text" name="mother[m_firstname]" id="m_name" required="true" required_msg="<?=$required_tr['father_name']?><?=$isRequired?>" />
		</td>
		<td class="td2">
			<label for="m_midname"><?=$form_tr['s_mid_name']?>:</label><br />
			<input type="text" name="mother[m_midname]" id="m_midname" />
		</td>
	</tr>
	<tr class="motherToggle" style="<?=$_POST['m_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="m_family_name"><?=$form_tr['s_family_name']?>:</label><br />
			<input type="text" name="mother[m_family_name]" id="m_family_name" required="true" required_msg="<?=$required_tr['father_family_name']?><?=$isRequired?>" />
		</td>
		<td class="td2">
			<label for="m_nationality"><?=$form_tr['nationality']?>:</label><br />
			<input type="text" name="mother[m_nationality]" id="m_nationality" />
		</td>
	</tr>
	<tr class="motherToggle" style="<?=$_POST['m_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="datepicker3"><?=$form_tr['birthdate']?>:</label><br />
			<input type="text" name="mother[m_birthdate]" id="datepicker3">
		</td>
		<td class="td2">
			<label for="m_native_lang"><?=$form_tr['mother_tongue']?>:</label><br />
			<input type="text" name="mother[m_native_lang]" id="m_native_lang" />
		</td>
	</tr>
	<tr class="motherToggle" style="<?=$_POST['m_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="m_education"><?=$form_tr['education']?>:</label><br/>
			<select name="mother[m_education]" id="m_education">
				<option value=""></option>
				<option value="secondary"><?=$form_tr['secondary_education']?></option>
				<option value="university degree"><?=$form_tr['university_degree']?></option>
			</select>
		</td>
		<td class="td2">
			<label for="m_profession"><?=$form_tr['profession']?>:</label><br />
			<select name="mother[m_profession]" id="m_profession">
				<option value=""></option>
<?php
foreach($GLOBALS['professions'][LNG_CURRENT] as $k){
	echo "<option value='".$k."'>".$k."</option>";
}
?>
			</select>
		</td>
	</tr>
	<tr class="motherToggle" style="<?=$_POST['m_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="m_company_name"><?=$form_tr['company_name']?>:</label><br />
			<input type="text" name="mother[m_company_name]" id="m_company_name" />
		</td>
		<td class="td2">
			<label for="m_mobile_phone"><?=$form_tr['mobile_phone']?>:</label>
			<input type="text" name="mother[m_mobile_phone]" id="m_mobile_phone" required="true" required_msg="<?=$form_tr['mobile_phone']?><?=$isRequired?>" />
		</td>
	</tr>
	<tr class="motherToggle" style="<?=$_POST['m_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="m_work_phone"><?=$form_tr['work_phone']?>:</label><br />
			<input type="text" name="mother[m_work_phone]" id="m_work_phone" />
		</td>
		<td class="td2">
			<label for="m_email"><?=$form_tr['email']?>:</label><br />
			<input type="text" name="mother[m_email]" id="m_email" required="true" regexp="email" regexp_msg="<?=$required_tr['invalid']?> <?=$form_tr['email']?>" required_msg="<?=$form_tr['email']?><?=$isRequired?>"/>
		</td>
	</tr>

	<tr><td class="td1" colspan="2"></td></tr>

	<tr><th class="thSpan" colspan="2"><div><input type="checkbox" name="g_det" value="1" class="g_toggle" style="float:left;"/><?=$form_tr['guardian_details']?></div></th></tr>
	<tr class="guardianToggle" style="<?=$_POST['g_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="g_name"><?=$form_tr['s_first_name']?>:</label><br />
			<input type="text" name="guardian[g_firstname]" id="g_name" required="true"  required_msg="<?=$required_tr['father_name']?><?=$isRequired?>" />
		</td>
		<td class="td2">
			<label for="g_midname"><?=$form_tr['s_mid_name']?>:</label><br />
			<input type="text" name="guardian[g_midname]" id="g_midname" />
		</td>
	</tr>
	<tr class="guardianToggle" style="<?=$_POST['g_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="g_family_name"><?=$form_tr['s_family_name']?>:</label><br />
			<input type="text" name="guardian[g_family_name]" id="g_family_name" required="true" required_msg="<?=$required_tr['father_family_name']?><?=$isRequired?>" />
		</td>
		<td class="td2">
			<label for="g_nationality"><?=$form_tr['nationality']?>:</label><br />
			<input type="text" name="guardian[g_nationality]" id="g_nationality" />
		</td>
	</tr>
	<tr class="guardianToggle" style="<?=$_POST['g_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="datepicker4"><?=$form_tr['birthdate']?>:</label><br />
			<input type="text" name="guardian[g_birthdate]" id="datepicker4">
		</td>
		<td class="td2">
			<label for="g_native_lang"><?=$form_tr['mother_tongue']?>:</label><br />
			<input type="text" name="guardian[g_native_lang]" id="g_native_lang" />
		</td>
	</tr>
	<tr class="guardianToggle" style="<?=$_POST['g_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="g_education"><?=$form_tr['education']?>:</label><br/>
			<select name="guardian[g_education]" id="g_education">
				<option value=""></option>
				<option value="secondary"><?=$form_tr['secondary_education']?></option>
				<option value="university degree"><?=$form_tr['university_degree']?></option>
			</select>
		</td>
		<td class="td2">
			<label for="g_profession"><?=$form_tr['profession']?>:</label><br />
			<select name="guardian[g_profession]" id="g_profession">
				<option value=""></option>
<?php
foreach($GLOBALS['professions'][LNG_CURRENT] as $k){
	echo "<option value='".$k."'>".$k."</option>";
}
?>
			</select>
		</td>
	</tr>
	<tr class="guardianToggle" style="<?=$_POST['g_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="g_company_name"><?=$form_tr['company_name']?>:</label><br />
			<input type="text" name="guardian[g_company_name]" id="g_company_name" />
		</td>
		<td class="td2">
			<label for="g_mobile_phone"><?=$form_tr['mobile_phone']?></label>
			<input type="text" name="guardian[g_mobile_phone]" id="g_mobile_phone" required="true" required_msg="<?=$form_tr['mobile_phone']?><?=$isRequired?>"/>
		</td>
	</tr>
	<tr class="guardianToggle" style="<?=$_POST['g_det'] ? 'display:table-row;' : ''?>">
		<td class="td1">
			<label for="g_work_phone"><?=$form_tr['work_phone']?>:</label><br />
			<input type="text" name="guardian[g_work_phone]" id="g_work_phone" />
		</td>
		<td class="td2">
			<label for="g_email"><?=$form_tr['email']?>:</label><br />
			<input type="text" name="guardian[g_email]" id="g_email" required="true" regexp="email" regexp_msg="<?=$required_tr['invalid']?> <?=$form_tr['email']?>" required_msg="<?=$form_tr['email']?><?=$isRequired?>"/>
		</td>
	</tr>

	<tr><td class="td1" colspan="2"></td></tr>

	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['previous_schools']?></div></th></tr>
	<tr>
		<td class="td1">
			<label for="previous_school"><?=$form_tr['previous_schools']?>:</label>
			<input type="text" name="serialized[previous_school]" id="previous_school" />
		</td>
		<td class="td2">
			<label for="length_of_study"><?=$form_tr['length_of_study']?>:</label>
			<input type="text" name="serialized[lenght_of_study]" id="length_of_study" />
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="educational_system"><?=$form_tr['educational_system']?>:</label><br/>
			<select name="serialized[educational_system]" id="educational_system">
				<option value=""></option>
<?php
foreach($GLOBALS['educational_systems'][LNG_CURRENT] as $k){
	echo "<option value='".$k."'>".$k."</option>";
}
?>
			</select>
		</td>
		<td class="td2">
			<label for="foreign_languages"><?=$form_tr['foreign_languages']?>:</label><br/>
			<input type="text" name="serialized[foreign_languages]" id="foreign_languages" />
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="web_page"><?=$form_tr['web_page']?>:</label><br/>
			<input type="text" name="serialized[web_page]" id="web_page" />
		</td>
		<td class="td2">
			<label for="grades_completed"><?=$form_tr['grades_completed']?>:</label><br/>
			<input type="text" name="serialized[grades_completed]" id="grades_completed" />
		</td>
	</tr>

	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['transport_details']?></div></th></tr>
	<tr>
		<td class="td1"><label><input type="radio" name="fields[transport]" value="1" class="toggle"/> <?=$form_tr['transport_yes']?></label></td>
		<td class="td2"><label><input type="radio" name="fields[transport]" value="0" class="untoggle"/> <?=$form_tr['transport_no']?></label></td>
	</tr>
	<tr class="toggleTr">
		<td class="td1" style="<?=$_POST['fields']['transport']=='1' ? 'display:table-cell' : 'display:none'?>">
			<label><input type="radio" class="twoWay" name="serialized[transport_type]" value="Two way" /> <?=$form_tr['two_way_transport']?></label><br/>
		</td>
		<td class="td2" style="<?=$_POST['fields']['transport']=='1' ? 'display:table-cell' : 'display:none'?>">
			<label><input type="radio" class="morning" name="serialized[transport_type]" value="Morning" /> <?=$form_tr['morning_transport']?></label><br/>
			<label><input type="radio" class="afternoon" name="serialized[transport_type]" value="Afternoon" /> <?=$form_tr['afternoon_transport']?></label>
		</td>
	</tr>

	<tr class="togglePickup"><th class="thSpan" colspan="2" style="<?=$_POST['serialized']['transport_type']=='Two way' || $_POST['serialized']['transport_type']=='Morning' ? 'display:table-cell;' : 'display:none;'?>"><div><?=$form_tr['pick_up_address']?></div></th></tr>
	<tr class="togglePickup">
		<td class="td1" colspan="2" style="<?=$_POST['serialized']['transport_type']=='Two way' || $_POST['serialized']['transport_type']=='Morning' ? 'display:table-cell;' : 'display:none;'?>">
			<label for="address"><?=$form_tr['address']?>:</label><br/>
			<textarea name="serialized[pickup_address]" rows="6" id="address"/>
		</td>
	</tr>
	<tr class="togglePickup">
		<td class="td1" style="<?=$_POST['serialized']['transport_type']=='Two way' || $_POST['serialized']['transport_type']=='Morning' ? 'display:table-cell;' : 'display:none;'?>">
			<label for="contact_person"><?=$form_tr['contact_person']?>:</label>
			<input type="text" name="serialized[pickup_contact_person]" id="contact_person" />
		</td>
		<td class="td2" style="<?=$_POST['serialized']['transport_type']=='Two way' || $_POST['serialized']['transport_type']=='Morning' ? 'display:table-cell;' : 'display:none;'?>">
			<label for="contact_phone"><?=$form_tr['contact_phone']?>:</label>
			<input type="text" name="serialized[pickup_contact_phone]" id="contact_phone"/>
		</td>
	</tr>

	<tr class="toggleDeliver"><th class="thSpan" colspan="2" style="<?=$_POST['serialized']['transport_type']=='Two way' || $_POST['serialized']['transport_type']=='Afternoon' ? 'display:table-cell;' : 'display:none;'?>"><div><?=$form_tr['deliver_address']?></div></th></tr>
	<tr class="toggleDeliver">
		<td class="td1" colspan="2" style="<?=$_POST['serialized']['transport_type']=='Two way' || $_POST['serialized']['transport_type']=='Afternoon' ? 'display:table-cell;' : 'display:none;'?>">
			<label for="address"><?=$form_tr['address']?>:</label><br/>
			<textarea name="serialized[deliver_address]" rows="6" id="address"></textarea>
		</td>
	</tr>
	<tr class="toggleDeliver">
		<td class="td1" style="<?=$_POST['serialized']['transport_type']=='Two way' || $_POST['serialized']['transport_type']=='Afternoon' ? 'display:table-cell;' : 'display:none;'?>">
			<label for="contact_person"><?=$form_tr['contact_person']?>:</label>
			<input type="text" name="serialized[deliver_contact_person]" id="contact_person" />
		</td>
		<td class="td2" style="<?=$_POST['serialized']['transport_type']=='Two way' || $_POST['serialized']['transport_type']=='Afternoon' ? 'display:table-cell;' : 'display:none;'?>">
			<label for="contact_phone"><?=$form_tr['contact_phone']?>:</label>
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
