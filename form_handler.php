<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject =$_POST['subject'];
$comment =$_POST['comment'];

$email_from = 'https://huzaifa-elahi.github.io/Univeristy.github.io';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                    "User Message: $comment.\n";

// $to ="yasirkhan2134567890@gmail.com";  

// $to ="
$to ="huzaifa.elahi101@gmail.com";  ;  

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>
