﻿<?php 
$errors = '';
//$myemail = 'mudashcoenterprise@gmail.com';
$myemail = 'oruchepaschal@gmail.com';
if(empty($_POST['email']))
{
$errors .= "\n Error: Required Field";
}

$email = $_POST['email'];

if (!eregi(
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", 
$email))
{
$errors .= "\n Error: Invalid Email Address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "A Subscriber Awaits:";
$email_body = "You have received a new email contact. Details are given below. \n Email: $email";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
}
?>