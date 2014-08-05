<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form method="POST" novalidate="novalidate">
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">
  $(function() {
    $("#datepicker").datepicker({
 	  dateFormat: "yy/mm/dd",
      changeMonth: true,
      changeYear: true,
      yearRange: "1990:2014",
    });
  });
</script>
<table cellspacing="0" cellpadding="0" border="0" class="applyFormTbl" style="width:100%; margin-bottom:20px;">
<colgroup>
	<col width="50%" />
	<col width="50%" />
</colgroup>
	
	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['admission_details']?></div></th></tr>
	<tr>
		<td class="td1" style="padding-top:10px;">
			<label for="first_name"><?=$form_tr['s_first_name']?>:</label><br />
			<input type="text" name="first_name" id="first_name" required="true" required_msg="<?=$required_tr['child_name']?><?=$isRequired?>"/>
		</td>
		<td class="td2">
			<label for="family_name"><?=$form_tr['s_family_name']?>:</label><br />
			<input type="text" name="family_name" id="family_name" required="true" required_msg="<?=$required_tr['child_family_name']?><?=$isRequired?>"/>
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="datepicker"><?=$form_tr['birthdate']?>:</label><br />
			<input type="text" name="birthdate" id="datepicker" required="true" required_msg="<?=$required_tr['student_birthdate']?><?=$isRequired?>">
		</td>
		<td class="td2">
			<label for="egn"><?=LNG_CURRENT==LNG_BG ? 'ЕГН:' : 'Passport number:'?></label><br />
			<input type="text" name="egn" id="egn" />
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<div style="clear:both;"></div>
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="p_first_name"><?=$required_tr['father_name']?>:</label><br />
			<input type="text" name="p_first_name" id="p_first_name" required="true" required_msg="<?=$required_tr['father_name']?><?=$isRequired?>"/>
		</td>
		<td class="td2">
			<label for="p_family_name"><?=$required_tr['father_family_name']?></label><br />
			<input type="text" name="p_family_name" id="p_family_name" />
		</td>
	</tr>
	<tr>
		<td class="td1">
			<label for="p_email"><?=$form_tr['email']?>:</label><br />
			<input type="text" name="p_email" id="p_email" required="true" regexp="email" regexp_msg="<?=$required_tr['invalid']?> <?=$form_tr['email']?>" required_msg="<?=$form_tr['email']?><?=$isRequired?>"/>
		</td>
		<td class="td2">
			<label for="p_phone"><?=$form_tr['mobile_phone']?>:</label>
			<input type="text" name="p_phone" id="p_phone" required="true" required_msg="<?=$form_tr['mobile_phone']?><?=$isRequired?>"/>
		</td>
	</tr>
	<tr>
		<td class="td1" colspan="2">
			<div style="clear:both;"></div>
		</td>
	</tr>
	
	<tr><th class="thSpan" colspan="2"><div><?=$form_tr['for_which_periods']?></div></th></tr>
	<tr>
		<td class="td1"><input type="checkbox" name="period_1" value="1" /> <?=$getPeriods['period_1']?></td>
		<td class="td2"><input type="checkbox" name="period_2" value="1" /> <?=$getPeriods['period_2']?></td>
	</tr>
	<tr>
		<td class="td1"><input type="checkbox" name="period_3" value="1" /> <?=$getPeriods['period_3']?></td>
		<td class="td2"><input type="checkbox" name="period_4" value="1" /> <?=$getPeriods['period_4']?></td>
	</tr>
	
	<tr><td class="td1" colspan="2" style="border-top:1px solid #1681F9;"></td></tr>
	<tr>
		 <td class="td1">
		 	<img src="/image_test.php" id="spamImg" style="border:1px solid #E3E9EF; width:218px;"/>
		 	<a onClick="document.getElementById('spamImg').src = document.getElementById('spamImg').src;" style="cursor:pointer;"><?=$form_tr['generate_new_code']?></a>
		 </td>
		 <td class="td2">
		 	<label for="anti-spam"><?=$form_tr['anti_spam']?></label>
		 	<input type="text" name="spam_code" id="anti-spam" />
		 </td>
	</tr>
	<tr>
		<td class="td1" colspan="2"><input type="checkbox" value="1" name="terms" id="terms" /><label for="terms"><?=$form_tr['terms_conditions']?></label></td>
	</tr>
	<tr>
		<td colspan='2' style="text-align:center;padding:30px 0 30px 0;">
			<input type="submit" name="btnSubmit" id="btnSubmit" value="<?=$_GET['option']=='old' ? $form_tr['reaply'] : $form_tr['send']?>" style="cursor:pointer; height:30px;"/>
		</td>
	</tr>
</table>
</form>