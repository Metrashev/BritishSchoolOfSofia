<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
<table class="viewHeader" cellpadding="0" cellspacing="0">
	<tr>
		<td width="1" class="viewHeaderLeft"><img
			src="<?=BE_IMG_DIR;?>design/header_l.png" /></td>
		<td width="100%" class="viewHeaderTitle">Admission</td>
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
<?php
$currData = getdb ()->getRow ( "SELECT * FROM admission WHERE id={$_GET['id']}" );
?>
<script type="text/javascript">
function AreYouSure(txt) {
	return confirm(txt);
}

$(document).ready(function(){
	var pMethod = <?php echo $currData['payment_method'];?>;
	var check = true;
	$('select.method').change(function(){
		pMethod = $(this).val();
		$('select#payment_method').val(pMethod);
		$('div.choose_method').fadeOut(400,function(){
			for(var i=1; i<=pMethod; i++){
				$('p.tax.t'+i).toggle(200, function(){});
				
			}
			$('select#payment_status').val(1);
			$('p.status').toggle(200, function(){});
			$('i.clear').toggle(200, function(){});
		});
	}); 


	$('input.clear').click(function(event){

		if(!AreYouSure('Are you sure?')) {
			return false;
		}
		
		pMethod = 0;
		$('select#payment_method').val(0);
		event.preventDefault();
		$('p.tax').css('display','none');
		$('select#payment_status').val(0);
		$('p.status').toggle(200, function(){});
		$('i.clear').toggle(200, function(){
			for(var d=1; d<=3; d++){
				$('input#tax_'+d).val(0);
				$('input#tax_status_'+d).prop('checked',false);
			}
		});
		$('select.method').val(0);
		$('div.choose_method').fadeIn(400,function(){});
	});



	
	$('input[name="btSave"]').click(function(){
		if(pMethod>0){
			for(var p=1; p<=pMethod; p++){
				//alert($('input.payed.c'+p).val());
				if(!$('input#tax_status_'+p).prop('checked')){
					check = false;
					break;
				}
			}
			
			if(check){
				$('select#payment_status').val(2);
				//alert($('select#payment_status').val());
			} else if(!check){
				$('select#payment_status').val(1);
			}
		}
	});
});

</script>
<div style="display: none;">
	<ITTI field_name='payment_method'></ITTI>
</div>
<div style="display: none;">
	<ITTI field_name='payment_status'></ITTI>
</div>
<div style="display: none;">
	<ITTI field_name='unique_id'></ITTI>
</div>
<table cellpadding="5" cellspacing="0" class="table" align="left">
	<colgroup span="4">
		<col width='25%'>
		<col width='25%'>
		<col width='25%'>
		<col width='25%'>
	</colgroup>
	<tbody>
		<tr>
			<td class="td1" colspan="2" style="vertical-align: top;">
				<div
					style="border: 1px solid #999; border-radius: 5px; padding: 10px;">
					<h2 style="display: block; margin: 2px 0 10px 0;">Student Status for Academic year <?=$currData['academic_year']?></h2>
					<p class="elongate">
						Acception status:
						<ITTI field_name="student_status" class="formFieldSize"></ITTI>
					</p>
					<p class="elongate">
						Student ID:<label
							class="studStatLabel"><?=!$currData['unique_id'] ? '-' : $currData['unique_id']?></label>
					</p>
					<p class="elongate">
						Grade: <label
							class="studStatLabel"><?=$GLOBALS['class_type'][$currData['class_type']]?></label>
					</p>
					<p class="elongate">
						Class:
						<ITTI field_name="paralelka" class="elongate"></ITTI>
					</p>
				</div>

				<div
					style="border: 1px solid #999; border-radius: 5px; padding: 10px; margin-top: 10px">
					<h2 style="display: block; margin: 2px 0;">Application documents</h2>
					<table cellspacing="0" cellpadding="0" style="width: 100%;">
						<colgroup span="2">
							<col width='53%'>
							<col width='47%'>
						</colgroup>
						<tr>
							<td><p class="appDoc">
									<ITTI field_name="medical_exam_form"></ITTI>
									Med. Examination Form
								</p></td>
							<td><p class="appDoc">
									<ITTI field_name="signing_agreement"></ITTI>
									Signing on Agreement
								</p></td>
						</tr>
						<tr>
						<td><p class="appDoc">
									<ITTI field_name="certificate_of_transfer"></ITTI>
									Certificate of Transfer
								</p></td>
							
							<td><p class="appDoc">
									<ITTI field_name="photograph"></ITTI>
									Photograph (passport)
								</p></td>
						</tr>
						<tr>
							<td><p class="appDoc">
									<ITTI field_name="m_idcard_copy"></ITTI>
									Copy of Mother's Id Card
								</p></td>
							<td><p class="appDoc">
									<ITTI field_name="f_idcard_copy"></ITTI>
									Copy of Father's Id Card
								</p></td>
						</tr>
						<tr>
							<td><p class="appDoc">
									<ITTI field_name="certificate_pre_school"></ITTI>
									Certificate of Pre-school Unit Completed
								</p></td>
						</tr>
					</table>
				</div>
			</td>
			<td class="td3" colspan="2" style="vertical-align: top;">
				<div
					style="border: 1px solid #999; border-radius: 5px; padding: 3px 10px;">
					<h2 style="display: block; margin: 2px 0;">Payment information and
						stats</h2>
					<p>
						Enrollment fee
						<ITTI field_name="enrollment_fee"></ITTI>
						&nbsp
						<ITTI field_name="enrollment_fee_status"></ITTI>
					</p>
					<b>School fee:</b>
<?php

if ($currData ['payment_status'] == 0) {
	$cDisplay = "display:block;";
	$tDisplay = "display:none";
} else {
	$cDisplay = "display:none;";
	$tDisplay = "display:block;";
}
echo <<<EOD
	<div class="choose_method" style="{$cDisplay}">
		<i>Please choose payment method:</i>
		<select name="payment_methods" class="method" style="display:inline-block;">
			<option value=""></option>
			<option value="1">I payment</option>
			<option value="2">II payments</option>
			<option value="3">III payments</option>
		</select>
	</div>
EOD;
?>	
<p class="tax t1" style="<?=$currData['payment_method']>0 ? $tDisplay : 'display:none;'?>">
						I&nbsp&nbsp&nbspPayment
						<ITTI field_name='tax_1'></ITTI>
						<ITTI field_name="tax_status_1"></ITTI>
					</p>
					<p class="tax t2" style="<?=$currData['payment_method']>1 ? $tDisplay : 'display:none;'?>"">
						II&nbsp&nbspPayment
						<ITTI field_name='tax_2'></ITTI>
						<ITTI field_name="tax_status_2"></ITTI>
					</p>
					<p class="tax t3" style="<?=$currData['payment_method']>2 ? $tDisplay : 'display:none;'?>"">
						III Payment
						<ITTI field_name='tax_3'></ITTI>
						<ITTI field_name="tax_status_3"></ITTI>
					</p>
					<p class="status" style="<?=$tDisplay?>">
						Payment status: <label
							class="studStatLabel"><?=$GLOBALS['payment_status'][$currData['payment_status']]?></label>
					</p>
					<i class="clear" style="<?=$tDisplay?>"><input type="button"
						class="clear" name="clearBtn" value="Clear payment options"/></i>

				</div>
				<div
					style="border: 1px solid #999; border-radius: 5px; padding: 5px; margin-top: 10px;">
					<h2 style="display: block; margin: 5px 0;">Notes</h2>
					<ITTI field_name="notes" rows="11" cols="80"></ITTI>
				</div>
			</td>
		</tr>
		<tr>
			<td class='td1'><label for="date_submited" style="height: 15px;">Date
					submited</label> <ITTI field_name='date_submited'
					style="vertical-align: top; margin-left: 10px"></ITTI></td>
			<td></td>
			<td></td>
			<td><input type="button" name="printContract"
				value="Print Contract"
				style="width: 140px; height: 30px; font-size: 14px;/*  margin-left: 70px; */ float:right;"
				onclick="window.open('contracts/print.php?id=<?=$_GET['id']?>')" /></td>
		</tr>
		<tr>
			<td class="td2"><label for="lang_type">Language version</label>
				<ITTI field_name='lang_type'
					style="vertical-align: top; margin-left: 150px; margin-top: -15px; width: 117px;"></ITTI>
			</td>
		</tr>
		<tr>
			<td colspan="4" align="center" style="padding-right: 10px;"><input
				type="submit" class="submit" name="btSave" value="Запази" />&nbsp;&nbsp;&nbsp;<input
				type="button" class="submit"
				onclick="self.location='<?=($_GET['bkp']);?>'" value="Back" /></td>
		</tr>
	</tbody>
</table>

