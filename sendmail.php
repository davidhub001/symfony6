<?php

function sendMail($to, $subject, $message, $from) {
    // To send HTML mail, the Content-type header must be set
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: ' . $from . "\r\n";
    $headers .= 'Reply-To: ' . $from . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    // Send mail
    if(mail($to, $subject, $message, $headers)) {
        header('location:contact?status=oui');
    } else {
        header('location:contact?status=non');

    }
}

// Example usage
$to = 'contact@echopechemada.mg';
$subject = 'Contact ';
$message = '
<html>
<head>
    <title>Contact</title>
</head>
<body>
'.$_POST["name"].'</br>'.$_POST["message"].'
</body>
</html>
';
$from = $_POST["email"];

sendMail($to, $subject, $message, $from);

?>
