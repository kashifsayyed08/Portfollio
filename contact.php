<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "kashifalisayyed7@gmail.com"; 
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Mail content
    $mailContent = "Name: $name\n";
    $mailContent .= "Email: $email\n\n";
    $mailContent .= "Message:\n$message";

    // Send email
    mail($to, $subject, $mailContent, $headers);

    // Redirect after sending email 
    header("Location: thank-you.html");
    exit();
}
?>
