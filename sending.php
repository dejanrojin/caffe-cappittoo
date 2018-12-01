

<?php

$name = $_POST ["fullname"];
$email = $_POST ["email"];
$massage = $_POST ["message"];

echo $name;
echo $email;
echo $massage;

$email_massage = " 
Name: ".$name."
Email: ".$email."
Massage: ".$massage."

";

mail ("dejan.rojin@yahoo.com", "Nova poruka sa sajta Rock Music", $email_massage);
header("Location: contact.php");

?>
