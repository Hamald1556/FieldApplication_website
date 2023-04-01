<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.atchosting.ac.tz';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hamadially@atchosting.ac.tz';                     //SMTP username
    $mail->Password   = '@1903bahati';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('hamadially@atchosting.ac.tz', ' F A O S');
    $mail->addAddress($email);
    $mail->addReplyTo('hamadially@atchosting.ac.tz', 'Information');

    //Content
    $message = "<a href='atchosting.ac.tz/FAOS/password_verify.php?email=$email&&code=$code'>click here to activate</a>";
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'PASSWORD VERIFICATION';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>