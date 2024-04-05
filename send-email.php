<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message_body = $_POST["message"] . "\n\nSender's Email: " . $email;

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    // SMTP Configuration
    $mail->Host = 'smtp.gmail.com';  // Your SMTP server hostname
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port = 587;  // SMTP port (Gmail uses 587)

    // SMTP Credentials
    $mail->Username = 'fthibaut@umail.utm.ac.mu';  // Your SMTP username
    $mail->Password = 'Fabricesuperhero007';  // Your SMTP password

    // Sender and recipient
    $mail->setFrom($email, $name);
    $mail->addAddress("thibautfabjoey23@gmail.com", "Fab");

    // Email content
    $mail->Subject = $subject . ' - From: ' . $email;
    $mail->Body = $message_body;

    // Send email
    $mail->send();

    // Email sent successfully
    echo "Email sent successfully!";
} catch (Exception $e) {
    // Error occurred while sending email
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
