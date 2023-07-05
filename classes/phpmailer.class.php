<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function emailContactForm($fn, $em, $ph, $msg) {
    $mail = new PHPMailer(true);

    try {
        //Server settings, shouldn't have to change this at all
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tuyacademytech@gmail.com';
        $mail->Password = 'Dru177l!ne';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients, send from OHFTech to OHF
        $mail->setFrom('tuyacademytech@gmail.com', 'TUY Tech');
        $mail->addAddress('tuyacademy1@gmail.com'); //using a test email for now
		$mail->addAddress('tuyacademytech@gmail.com');
		$mail->addReplyTo('tuyacademytech@gmail.com');
        
        //Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: " . $fn;
		$mail->Body = '<!DOCTYPE html><html><body>Name: ' . $fn . "<br>Email: " . $em . 
						"<br>Phone: " . $ph . "<br>Message: " . $msg . "</body></html>";
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. {$mail->ErrorInfo}";
    }
}