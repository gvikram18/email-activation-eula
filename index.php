<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;


$mail->Username = 'vikram.giriraj@ivtree.com';
$mail->Password = 'Mysticeye@123';

$mail->setFrom('tchalla@mailinator.com', 'IVTREE');
$mail->addAddress('tchalla@mailinator.com');
$mail->Subject = 'SMTP email activation';
$mail->Body = 'Hi user, <br> <br> Thanks for opting Uniclair. Please confirm your email address by clicking the link below.
			   <br><br> <a href="https://www.temporary-url.com/F1C5">https://www.temporary-url.com/F1C5</a>';

if ($mail->send())
    echo "Mail sent";
else
	echo "Oops! Something seems fishy ..."
?>