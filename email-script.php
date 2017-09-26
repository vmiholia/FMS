<?php

require_once "vendor/autoload.php";

$mail = new PHPMailer;

//Enable SMTP debugging. 
// $mail->SMTPDebug = 2;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name        
// $mail->Debugoutput = 'html';                  
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "vashalpesh@gmail.com";                 
$mail->Password = "9898919819";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "vashalpesh@gmail.com";
$mail->FromName = "vash alpesh";

$mail->addAddress("alpeshvash@gmail.com", "tempo");

$mail->isHTML(true);

$mail->Subject = "Fee Receipt-Little Flowers";
$mail->Body = "<i>Mail body in HTML</i>";
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