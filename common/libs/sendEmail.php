<?php
namespace common\libs;
use common\libs\PHPMailer;
class sendEmail{
	function sendEmail($sendEmail,$subject,$body="no body"){
		$mail = new PHPMailer();
		$mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'buixuanthangcntt1@gmail.com';                 // SMTP username
        $mail->Password = 'buixuanthang1994';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->isHTML(true); 
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('phoneshop.com.vn','PhoneShop');
        if(is_array($sendEmail)){
        	foreach ($sendEmail as $value) {
        		$mail->addAddress($value);     // Add a recipient
        	}
        }else{
        	$mail->addAddress($sendEmail);     // Add a recipient
        }
        $mail->Subject = $subject;
        $mail->Body    = $Body;
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
       
	}
}