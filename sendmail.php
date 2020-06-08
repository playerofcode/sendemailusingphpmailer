<?php 
/*
Written By:Er Vivek Gupta
Whatsapp Number:+917054874357
Email:playerofcode@gmail.com
Website:playerofcode.com
Please Subscribe my channal. If you facing any problem. Contact me. Or if you want to make any videos on any topics, You can tell me I will make.
*/
//Send Email Using PHPMailer
/*
Gmail Account Setting
2 Step Verification must be off
Less secure app access must be ON
*/
require 'phpmailer/PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='youremail@gmail.com';//Your Email Address
$mail->Password='XXXXXXXXXX';//Your Email Password
$mail->setFrom('youremail@gmail.com','Notification');
$mail->addAddress('receiveremail@gmail.com');//Receiver Email
$mail->addReplyTo('youremail@gmail.com');
$mail->isHTML(true);
$mail->Subject='Be The Player Of Code';
$mail->Body='<h1>Please Do Subscribe My Channal</h1>.<br><h3 style="color:red;">Player Of Code</h3>';
if(!$mail->send())
{
echo "Something went wrong";
echo $mail->ErrorInfo;
}
else
{
	echo "Email sent successfully";
}
?>
