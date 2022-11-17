<?php

$receiver = "datsbyun04@gmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, tehere... This is a test email send from Localhost.";
$sender = "From: della.002@ski.sch.id";

if( mail($receiver, $subject, $body, $sender) ){
    echo "Email sent successfully to $receiver";
} else {
    echo "Sorry, failed while sending mail!";
}

?>