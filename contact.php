<?php

// CHANGE THE THREE VARIABLES BELOW

$EmailFrom = "MergeMediaInc";
$EmailTo = "mergemediaincteam@gmail.com";
$Subject = "Contact Form Submission";

$Name = Trim(stripslashes($_POST['name']));
$Tel = Trim(stripslashes($_POST['subject']));
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['message']));

// prepare email body text
$Body = "";
$Body .= "name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

