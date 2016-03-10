<?php
require '../assets/PHPMailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'carlojumagdao@gmail.com';
$mail->Password = '42819335cLJ';
$mail->SMTPSecure = 'tls';
 
$mail->From = 'carlojumagdao@gmail.com';
$mail->FromName = 'carlo';
$mail->addAddress('carlojumagdao@gmail.com', 'Carlo');
 
$mail->addReplyTo('carlojumagdao@gmail.com', 'Carlo');
 
$mail->WordWrap = 50;
$mail->isHTML(true);
 
$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';
?>