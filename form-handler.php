<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'new form submission';

$email_body = "User_name: $name.\n".
              "User_email: $visitor_email.\n".
              "subject: $subject.\n".
              "User_message: $message.\n";


$to = 'bilalajm95@gmail.com';


$headers = "From: $email_form \r\n";

$headers = "Replay-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("loction: contact.html");

?>