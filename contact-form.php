<?php
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$email_from = 'hksharpca@gmail.com';

$email_subject = "New Form Submission";

$to = "kaheehong10@gmail.com";
$headers = "From: " .$email_from;
$email_body = "User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message.\n";

$headers = "Reply-To: $mailFrom \r\n";
mail($to, $email_subject, $email_body, $headers);
header ("Location: main.html");
