<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$msg = "Name: $name \nEmail: $email \nSubject: $subject \nMessage: $message";

if (mail("shayanalam8931@gmail.com", "Contact Us Form", $msg)) {
  echo "good";
} else {
  echo "bad";
}

