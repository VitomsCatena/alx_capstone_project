<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


//create email message:
    
$emailMessage = "Name: $name\n";
$emailMessage .= "Email: $email\n";
$emailMessage .= "Phone Number: $phone\n";
$emailMessage .= "Subject: $subject\n";
$emailMessage .= "\n$message";

//recipients email in this case mine

$to = "vitomscatenathe1@gmail.com";

//emails header

$headers = "from: $email";

//send the email
if (mail($to, $subject, $emailmessage, $headers)) {
    echo "Email delivered successfully.";
}
   else{
    echo "ERROR!! Email could not be sent.";
   }
}
?>
