<?php

    require "../config/app.php";
    require "../../check.php";

# This file is for sending an copy of the submitted answers

# This simply sends a HTML Email to the $email_to 

$email_to = $_POST['email_to'];
$email_from = $_POST['email_from'];

#Sends custom email to User
# ATTENTION
# Please set up a mailserver
# otherwise emails will be sent from the router and you can't send mails with your real domain.
$to = "$email_to";
$from = "$email_from";
$fName = "$com_name";

$subject = "Copy of your submitted answers | $com_name";

#multi-line message content including design and HTML Code
$message = <<< MSG

<html>
    <body>
        <style>
            * { 
                font-family: Arial; }
        </style>
    
        <h1><span style="color:red;">Attention: </span>Here is a copy of your submitted answers!</h1>
            <br>
                <p>Hello,<br>here is a copy of your submitted answers.<br>Please be sure everything is correct.</p>
                ...
                <p style="font-size:small;">$com_name</p>
    </body>
</html>
MSG;
# ... replaces the answers

#Tells the Browser, that this email is in HTML5
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= "From: $fName <'$from'>" . "\r\n";

# Returns that the email was sent...or not :)
if(mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully";
} else{
    echo "Failed sending Email";
};





#COMMENTS REMOVED IN THE NEXT TEMPLATES!


?>