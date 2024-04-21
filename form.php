<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Email details
    $to = "info@henison.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Thank you for your submission. We will contact you shortly.")</script>';
    } else {
        echo '<script>alert("There was a problem sending your message. Please try again later.")</script>';
    }
}
?>
