<?php

// Debugging tools. Only turn these on in your development environment.

//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");

// Special mail settings that can make mail less likely to be considered spam
// and offers logging in case of technical difficulties.

ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);

//variables
$name = strip_tags(htmlspecialchars($_POST['Name']));
$email_address = strip_tags(htmlspecialchars($_POST['Email']));
$message = strip_tags(htmlspecialchars($_POST['Message']));

// Create the email and send the message
$to = 'ozi0414@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message jinwoo-oh.com\n\n"."Name: $name\n\nEmail: $email_address\n\nMessage:\n$message\n\n";
$headers = "From: noreply@jinwoo-oh.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
/*
$headers = "Content-Type: text/html; charset=UTF-8"; //Do you see "chinese" in your email? Add this if your language is  supported by the Unicode Standard. Also make sure to replace any php \n with <br> Find if your language is supported at: http://www.unicode.org/standard/supported.html
*/

if(mail($to,$email_subject,$email_body,$headers)){ echo "Will reach out to you shortly. Thank you.";} else{ echo "Error, check your logs."; }
return true;
