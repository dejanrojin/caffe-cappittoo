<?php

$name= $_POST["fullname"];
$email= $_POST["email"];
$message= $_POST["message"];


echo $name;
echo $email;
echo $message;


$email_message = "";

$email_messag=$email_message."Name:".$name."\n";

$email_messag=$email_message. "Email: " .$email."\n";

$email_messag=$email_message."Message:".$message;



mail("dejan.rojin@yahoo.com",  "Poruka more", $email_message);
header("Location:contact.php?status=thanks");
?>