<?php include('form_fe.tpl') ?>

	<tr><td class="td1" colspan="2" style="border-top:1px solid #1681F9;"></td></tr>
	<tr>
		 <td class="td1">
		 	<img src="/image_test.php" id="spamImg" style="border:1px solid #E3E9EF; width:218px;"/>
		 	<a onClick="window.document.getElementById('spamImg').src = window.document.getElementById('spamImg').src;" style="cursor:pointer;"><?=$form_tr['generate_new_code']?></a>
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