<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email
    $to = 'matt.mascarelli@gmail.com'; // Your email address
    $subject = 'New message from your website';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully. Thank you!';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
}
?>
