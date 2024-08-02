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
        echo "Email sent successfully to $to";
    } else {
        echo "Failed to send email";
    }
}

// Example usage
$to = 'contact@echopechemada.mg';
$subject = 'Test Email';
$message = '
<html>
<head>
    <title>Test Email</title>
</head>
<body>
    <h1>This is a test email</h1>
    <p>This email was sent using PHP\'s <code>mail()</code> function with proper headers.</p>
</body>
</html>
';
$from = 'david@example.com';

sendMail($to, $subject, $message, $from);

?>
