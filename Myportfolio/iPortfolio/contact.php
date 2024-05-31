<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email address where you want to receive the messages
    $to = "gobika177@gmail.com";

    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Method not allowed";
}
?>
