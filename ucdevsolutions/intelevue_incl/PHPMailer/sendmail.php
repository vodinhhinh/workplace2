<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

$full_name = $_POST['full_name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$message = file_get_contents('contents.html', dirname(__FILE__));
$message = str_replace('%full_name%', $full_name, $message); 
$message = str_replace('%company%', $company, $message); 
$message = str_replace('%email%', $email, $message); 
$message = str_replace('%phone%', $phone, $message); 
$message = str_replace('%comment%', $comment, $message); 

 
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
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
$mail->Host = "ats-exchg10ca.atsnetworking.com";
//$mail->Host = "securemail1.atsnetworking.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = false;
//Username to use for SMTP authentication
//$mail->Username = "yourname@example.com";
//Password to use for SMTP authentication
//$mail->Password = "yourpassword";
//Set who the message is to be sent from
$mail->setFrom('contact@intelevue.com', 'Intelevue Site');
//Set an alternative reply-to address
$mail->addReplyTo('jkelley@atsnetworking.com', 'James Kelly');
//Set who the message is to be sent to
$recipients = array(
    'sales@intelevue.com' => 'Sale Intelevue',
   // ..
);
foreach($recipients as $email => $name)
{
   $mail->addAddress($email, $name);
}
//Set the subject line
$mail->Subject = 'Intelevue Contact';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
	echo json_encode(array(
    'checksuccess' => false,
	'errorMessage' => sprintf($mail->ErrorInfo),
));
} else {
	echo json_encode(array(
    'checksuccess' => true,
	'errorMessage' => sprintf($mail->ErrorInfo),
));
}
