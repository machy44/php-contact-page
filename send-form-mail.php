<?php

	 require 'vendor/autoload.php';

		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
		//Ask for HTML-friendly debug output
		//$mail->Debugoutput = 'html';
		$mail->SMTPAuth = true; // authentication enabled
		//Set the hostname of the mail server
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; // or 587
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//$mail->IsHTML(true);
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "something";
		//Password to use for SMTP authentication
		$mail->Password = "something";
		//Set who the message is to be sent from
		$mail->SetFrom($_POST['Inputmail']);
		$mail->FromName = $_POST['Inputmail'];
		//$mail->Subject = "Test";
		$mail->Body = $_POST['Inputmessage'];
		//Set who the message is to be sent to
		$mail->AddAddress("email of recipient");
		//Set the subject line
		$mail->Subject = 'Form submission';	

		 if(!$mail->Send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		    exit;
		 } else {
		    echo "Message has been sent";
		 }

?>
