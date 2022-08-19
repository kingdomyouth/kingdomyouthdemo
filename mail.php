<?php

$name = $_post['name']
$email = $_post['email']
$message = $_post['message']


$mailheader = "form:" .$name. "<".$email.">\r\n"

$recipient = "marakiandargie@gmail.com;

mail($recipient, $message,$mailheader)
or die ("ERROR!");

echo" SENT!";

?> 