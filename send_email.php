<?php
// Set recipient email address
$to = "josethibaut@outlook.com";

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Compose email message
$email_message = "Name: $name\n";
$email_message .= "Email: $email\n";
$email_message .= "Phone: $phone\n";
$email_message .= "Subject: $subject\n";
$email_message .= "Message: $message\n";

// Set email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send email
mail($to, $subject, $email_message, $headers);

// Redirect back to the form or to a thank you page
header("Location: thank_you.html");
?>
