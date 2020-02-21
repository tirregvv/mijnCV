<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Naam veld is verplicht ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email veld is verplicht ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errorMSG .= "Onderwerp veld is verplicht ";
} else {
    $subject = $_POST["subject"];
}

// Message
if (empty($_POST["message"])) {
    $errorMSG .= "Bericht veld is verplicht ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "info@gerritvanvliet.nl";
$Subject = "Nieuw bericht van gerritvanvliet.nl";

$headers = 'From: info@gerritvanvliet.nl';

// prepare email body text
$Body = "Ingevulde gegevens:";
$Body .= "\n";
$Body .= "\n";
$Body .= "Naam: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Onderwerp: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "Bericht: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);

?>