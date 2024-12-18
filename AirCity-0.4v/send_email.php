<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email recipient
    $to = "thirulingeshwart@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";

    // Create email content
    $email_content = "First Name: $firstName\n";
    $email_content .= "Last Name: $lastName\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message: $message\n";

    // Send email
    $headers = "From: $email";
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
