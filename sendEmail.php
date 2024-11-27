<?php
require "config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['msg']);

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                        // Send using SMTP
        $mail->Host = 'smtp.gmail.com';                       // Set your SMTP server
        $mail->SMTPAuth = true;                                 // Enable SMTP authentication
        $mail->Username = 'danquahkofi520@gmail.com';             // SMTP username
        $mail->Password = 'uzke ptwf xmph iosh';               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     // Enable TLS encryption
        $mail->Port = 465;                                     // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);  // Your email and name
        $mail->addAddress('danquahkofi520@gmail.com', 'Recipient'); // Add a recipient

        // Content
        $mail->isHTML(true);                                   // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "<h3>New message from your portfolio contact form</h3>
                            <p><strong>Name:</strong> {$name}</p>
                            <p><strong>Email:</strong> {$email}</p>
                            <p><strong>Message:</strong> {$message}</p>";
        $mail->AltBody = "New message from your portfolio contact form\n\n
                            Name: {$name}\n
                            Email: {$email}\n
                            Message: {$message}";

        // Send email
        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Email sent successfully!']);
        
        $_SESSION['success'] = 'Email sent successfully!';
        header("Location:index.php");
        exit();
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
    }
}
