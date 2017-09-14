<?php

$user_input = $_POST;
$errors[] = "";

if ($user_input["name"] == ""){
  $errors[] = "Name is missing.";
}
if ($user_input["email"] == ""){
  $errors[] = "Email is missing.";
}
if ($user_input["subject"] == ""){
  $user_input["subject"] = "New Home Avenue Contact Message!";
}
if ($user_input["message"] == ""){
  $errors[] = "There has to be a message.";
}

foreach($errors as $error) {
  print $error . "<br>";
}

var_dump($user_input);
?>
