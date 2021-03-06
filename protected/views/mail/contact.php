<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
<table style="font-family:Roboto; border-spacing:0px;padding: 20px; background-color: #F8F9FA; border-collapse:separate;" summary="o_mail_notification" width="100%" cellpadding="0" border="0" bgcolor="#F8F9FA">
<!-- HEADER -->
		<tr>
			<td style="min-width: 590px;" align="center">

				<table style="border-spacing:0px;width:590px;background:inherit;color:inherit" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td style="padding:10px 10px 10px 0px;font-size: 14px" width="200" valign="center">
							<img src="<?php echo $logo; ?>" style="padding: 20px; margin: 0px; height: auto; max-width:200px;" alt="<?php echo Yii::app()->params['nomeAssociazione'];?>" data-original-title="" title="">
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>

	  <!-- CONTENT -->
  <tr>
		<td style="min-width: 590px;" align="center">
				<table style="border-spacing:0px;min-width: 590px; background-color: rgb(255, 255, 255); padding: 20px; border-collapse:separate; border-width:1px; border-style:solid; border-color:#e8eaed;" width="590" cellpadding="0" bgcolor="#ffffff">
					<tbody>
						<tr>
							<td style="font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif; color: #555; font-size: 14px;" valign="top">
								<div>
									<p style="font-size:34px;color:rgb(57,150,220)"><?php echo Yii::t('lang','Issue form: {subject}',array('{subject}'=>$password['subject']));?></p>
								</div>
								<div>
									<p style="margin-top: 28px;font-size: 14px;"><?php echo Yii::t('lang','<strong>{email}</strong> sent this message:',array('{email}'=>$password['email']));?></p>
								</div>
								<div>
									<p style="margin-top: 28px;font-size: 14px;"><?php echo $password['body'];?>
				          			<br>
				          			</p>
								</div>

							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td>Allegati:</td>
		</tr>
		<tr>
			<td><img src="<?php echo $password['attach']; ?>" /></td>
		</tr>
		<!-- FOOTER -->
		<?php
		$settings = Settings::load();
		 ?>

			<tr>
				<td style="min-width: 590px;" align="center">
					<table style="border-spacing:0px;min-width: 590px; background-color: rgb(248,249,250); padding: 20px; border-collapse:separate;" width="590" cellpadding="0" border="0" bgcolor="#F8F9FA">
						<tbody>
							<tr>
								<td style="color: #6c737f; padding-top: 10px; padding-bottom: 10px;" valign="middle" align="left">
									<div>
										<p style="font-size: 14px;">
											<strong><?php echo Yii::app()->params['nomeAssociazione']; ?></strong>
											<!-- <br><?php //echo $settings->gdpr_address; ?>
											<br><?php //echo $settings->gdpr_cap.' - '. $settings->gdpr_city; ?>
											<br>Tel. <?php //echo $settings->gdpr_telefono; ?> -->
											<br><?php echo Yii::app()->params['adminEmail'] .' | '. Yii::app()->params['adminSiteweb']; ?>
										</p>
									</div>
									<div>
										<p style="font-size: 10px;"><?php echo Yii::t('lang','You receive this email because you have registered on our site and / or you have used our services and you have given consent to receive email communications from us.');?>
										</p>
									</div>
									<div>
										<p style="font-size: 10px;">---<br><strong><?php echo Yii::t('lang','Confidentiality and security of the message');?></strong><br><?php echo Yii::t('lang','The content of the e-mail is reserved and is addressed exclusively to the identified recipient (s). Therefore it is forbidden to read it, copy it, disclose it or use it by anyone except the recipient (s). If you are not the recipient, we invite you to delete the message and any attachments by immediately sending us written communication by e-mail. Although the sender undertakes to take the most appropriate measures to ensure the absence of viruses within any attachments to this e-mail communication, such measures do not constitute an absolute guarantee and therefore we invite you to put in place your antivirus checks before opening any attachment. The sender therefore assumes no responsibility for any damage that you may suffer due to viruses contained in the messages.'); ?>
										</p>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>

		</table>
<?php
//exit;
?>
