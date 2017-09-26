<?php
/*
require "vendor/autoload.php";
	function send_mail($to,$pdf,$id,$tenantName){
		
		//Create a new PHPMailer instance
		$mail = new PHPMailerOAuth;
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Set AuthType
		$mail->AuthType = 'XOAUTH2';
		//User Email to use for SMTP authentication - user who gave consent to our app
		$mail->oauthUserEmail = "vashalpesh@gmail.com";
		//Obtained From Google Developer Console
		$mail->oauthClientId = "1025638165349-61b18lmeg8aq9nj2d8r0vdm8bu066epd.apps.googleusercontent.com";
		//Obtained From Google Developer Console
		$mail->oauthClientSecret = "dAGr63_YgQubfBaQRGXQJfbI";
		//Obtained By running get_oauth_token.php after setting up APP in Google Developer Console.
		//Set Redirect URI in Developer Console as [https/http]://<yourdomain>/<folder>/get_oauth_token.php
		// eg: http://localhost/phpmail/get_oauth_token.php
		$mail->oauthRefreshToken = "1/E-K0MpHlYnjVPw1VSU7qo4H5MwMV65UdsSjyTnfAjKM";
		//Set who the message is to be sent from
		//For gmail, this generally needs to be the same as the user you logged in as
		$mail->setFrom('vashalpesh@gmail', 'Vas Alpesh');

	$mail->addAddress($to ,"Hey its working");
	$mail->addAttachment($pdf);         // Add attachments
	$mail->isHTML(true);


	$mail->Subject = "Fee Reciept- LITTLE FLOWERS PUBLIC -".$id;
	$mail->Body = "<p>Hi ".$tenantName.",<br> <br> Fee Reciept is attached ";
	$mail->AltBody = "This is the plain text version of the email content";
	// echo "yaha tak ho gaya";
	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
	    echo "Message has been sent successfully";
	}	
}*/
?>