<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'bin/PHPMailer/src/Exception.php';
require 'bin/PHPMailer/src/PHPMailer.php';
require 'bin/PHPMailer/src/SMTP.php';

function trymail(){
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'mysteribros@gmail.com';                     //SMTP username
		$mail->Password   = 'xxxxxxxx';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		
		//Recipients
		$mail->setFrom('mysteribros@gmail.com', 'MysteriBros');
		//$mail->addAddress('example@gmail.com', 'Joe User');     //Add a recipient
		$mail->addAddress('example@gmail.com');               //Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
		
		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
		
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		$mail->send();
		echo 'Message has been sent';
	}
	catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}

if(array_key_exists('trymail', $_POST)) {
    trymail();
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
        .smreq{font: 10px sans-serif; color: red;}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form method="post">

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="trymail">
            </div>
        </form>
    </div>    
</body>
</html>