<?php
$userName = $_POST['name'];
$userEmail = $_POST['email'];
$message = $_POST['message'];

$to = "moulati.mehdi@gmail.com";
$body = "";

$body = "From: " . $userName . "\r\n";
$body .= "Email: " . $userEmail . "\r\n";
$body .= "Message: " . $message . "\r\n";

mail($to, "", $body);


