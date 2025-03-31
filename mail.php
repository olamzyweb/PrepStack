 
hellloo
<?php
 require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.olamzyweb.com.ng;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'olanrewaju@olamzyweb.com.ng';                 // SMTP 
$mail->Password = 'Olamzyweb@17';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'horlameedayolanrewaju@gmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('olamzyweb@gmail.com', 'Joe User');     // Add a recipient
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


?>