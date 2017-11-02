<?php

require_once 'vendor/autoload.php';

// Declare POST variables
$sendTo = 'c.ortiz1216@gmail.com';
$input = $_POST;
$name = $input["name"];
$email = $input["email"];
$subject = $input["subject"];
$body = $input["message"];

// Create the Transport
$transport = new Swift_MailTransport();

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = new Swift_Message();
$message->setTo([ $sendTo => 'Home Avenue']);
$message->setSubject($subject);
$message->setBody($body);
$message->setFrom($email, $name);

$result = $mailer->send($message);

if ($result == 0){
  echo "There was an error sending your email!";
}else{
  echo "Your email was sent successfully!";
}
?>
