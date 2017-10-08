<?php
$name= $_POST["name"];
$email= $_POST["email"];
$msg= $_POST["message"] ;
wordwrap($msg,70);

//.$name . "\nEmail: " . $email ."\nMessage:" . $msg

mail("srsr5559@gmail.com" , "Client Message" , "From: ");
