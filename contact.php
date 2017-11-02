<?php

$user_input = $_POST;
// $errors[] = "";
//
// if ($user_input["name"] == ""){
//   $errors[] = "Name is missing.";
// }
// if ($user_input["email"] == ""){
//   $errors[] = "Email is missing.";
// }
// if ($user_input["subject"] == ""){
//   $user_input["subject"] = "New Home Avenue Contact Message!";
// }
// if ($user_input["message"] == ""){
//   $errors[] = "There has to be a message.";
// }
//
// foreach($errors as $error) {
//   print $error . "<br>";
// }
//
// var_dump($user_input);

require_once 'vendor/autoload.php';

// Create the Transport
$transport = new Swift_MailTransport();

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = new Swift_Message();
$message->setTo([ 'c.ortiz1216@gmail.com' => 'Home Avenue']);
$message->setSubject("Home Avenue Contact Form");
$message->setBody("You're our best client ever.");
$message->setFrom("c.ortiz@lausd.net", "John Doe");

// Send the message
$mailer->send($message);
?>
