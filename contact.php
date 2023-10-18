<?php
$mail_to_send_to = "circlesafrica@gmail.com";
$from_email = "contact@circlesofafrica.org";
$sendflag = $_REQUEST['sendflag'];                       
if ( $sendflag == "send" )
        {
                $email = $_REQUEST['email'] ;
                $message = $_REQUEST['message'] ;
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email" . "\r\n" ;
                $a = mail( $mail_to_send_to, "Message from a contact form", $message, $headers );
                if ($a)
                {
                     print("Message was sent, you can send another one");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
        }
?>