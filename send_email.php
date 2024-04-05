<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set recipient email address
    $to = "thibautfabjoey23@gmail.com";

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message: $message\n";

    // Set email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, "Contact Form Submission", $email_message, $headers)) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('error' => 'Failed to send email. Please try again later.'));
    }
}
?>
