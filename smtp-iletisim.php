<?php
	require('phpmailer/class.phpmailer.php');

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug 	= 0;
	$mail->SMTPAuth 	= TRUE;
	$mail->SMTPSecure = 'tls';
	$mail->Port     	= 587;
	$mail->Username 	= 'enbiya@362.com.tr';
	$mail->CharSet 		= 'UTF-8';
	$mail->Password 	= '123enb123!_';
	$mail->Host     	= 'smtp.yandex.com';
	$mail->Mailer   	= 'smtp';
	$mail->SetFrom($mail->Username, $_POST['user_email'], 'İletişim Formu');
	$mail->AddAddress('enbiya@362.com.tr', $_POST['user_email']);
	$mail->IsHTML(true);
	$mail->Subject 		= 'Miryapı & Gayrimenkul - İletişim Formu';
	$mail->WordWrap  	= 80;
	$mail->Body = "
	<html>
		<head>
			<style>
				body {
					font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
					font-size: 13px;
					line-height: 1.6;
				}
			
				table {
					width: 100%;
					border-top: 1px solid rgba(0,0,0,0.08);
					border-right: 1px solid rgba(0,0,0,0.08);
					border-bottom: 1px solid rgba(0,0,0,0.08);
					border-collapse: collapse;
				}
				table tr {
					border-bottom: 1px solid rgba(0,0,0,0.08);
					display: flex;
					align-items: center;
				}
				table tr th {
					background: #444;
					color: #fff;
					font-size: 13px;
					height: 15px;
					font-weight: bold;
					padding: 11px 20px;
					text-align: left;
				}
				table tr td {
					padding: 11px 20px;
					border-left: 1px solid rgba(0,0,0,0.08)
				}
			</style>
		</head>
		<body>

			<table>
				<tbody>
					<tr>
						<th style='width:35%'>KİŞİ BİLGİLERİ</th>
						<th style='width:65%'></th>
					</tr>
					<tr>
						<td style='width:35%'><strong>Kullanıcı Ip Adresi</strong></td>
						<td style='width:65%'>".($_POST['user_ip'])."</td>
					</tr>
					<tr>
						<td style='width:35%'><strong>Adı: </strong></td>
						<td style='width:65%'>".($_POST['user_name'])."</td>
					</tr>
					<tr>
						<td style='width:35%'><strong>Cep Telefonu: </strong></td>
						<td style='width:65%'>".($_POST['user_phone'])."</td>
					</tr>
					<tr>
						<td style='width:35%'><strong>E-Posta Adresi: </strong></td>
						<td style='width:65%'>".($_POST['user_email'])."</td>
					</tr>
					<tr>
						<td style='width:35%'><strong>Mesaj: </strong></td>
						<td style='width:65%'>".($_POST['user_message'])."</td>
					</tr>
				</tbody>
			</table>
			<br><br>

			<table>
				<tbody>
					<tr>
						<th style='width:35%'>KVKK</th>
						<th style='width:65%'></th>
					</tr>
					<tr>
						<td style='width:35%'><strong>Sadece Miryapigyo ile paylaşılmasını istiyorum: </strong></td>
						<td style='width:65%'>".(isset($_POST['user_share']) == true ? "Evet" : "Hayır" )."</td>
					</tr>
					<tr>
						<td style='width:35%'><strong>Miryapigyo'nun çözüm ortakları ile paylaşılmasını istiyorum: </strong></td>
						<td style='width:65%'>".(isset($_POST['user_references']) == true ? "Evet" : "Hayır" )."</td>
					</tr>
					<tr>
						<td style='width:35%'><strong>Kvkk ve Aydınlatma Metni'ni okudum ve onaylıyorum: </strong></td>
						<td style='width:65%'>".(isset($_POST['user_privacy']) == true ? "Evet" : "Hayır" )."</td>
					</tr>
					
				</tbody>
			</table>

		</body>
	</html>
";


if(!$mail->Send()) {
	echo "<p class=\"form-messages ui-error\">>Bir hata oluştu. Lütfen tekrar deneyin !<</p>";
} else {
	echo "<p class=\"form-messages ui-success\">Mesajınız bize ulaştı. En kısa sürede size dönüş yapacağız.</p>";
}

?>
