<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

// Set recipient email address (replace with your email)
$to = 'iseth_be21@thapar.edu';

// Subject of the email
$subject = 'Contact Form Submission from Ishita Seth Portfolio';

// Message body
$body = "Name: $name \nEmail: $email \nMobile: $mobile \nMessage: $message";

// Headers for the email
$headers = "From: $name <$email>";

// Send email using mail function
if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email.";
}
?>
