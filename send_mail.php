<?php
// Enable full error reporting (for development only)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Log to confirm PHP file is reached
file_put_contents(__DIR__ . "/log.txt", "Form reached PHP\n", FILE_APPEND);
file_put_contents("log.txt", "Form reached PHP\n", FILE_APPEND);

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    file_put_contents("log.txt", "Form not submitted via POST\n", FILE_APPEND);
    exit("Form not submitted properly.");
}


// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Gmail credentials
$gmailUsername = 'ecomsaakraagency@gmail.com';
$gmailAppPassword = 'mfse yhrw qrpr ysqc';  // App password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Log POST data
    file_put_contents(__DIR__ . "/log.txt", print_r($_POST, true), FILE_APPEND);

    // Sanitize input
    $name = htmlspecialchars($_POST['name']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $gmailUsername;
        $mail->Password = $gmailAppPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($gmailUsername, 'Website Contact Form');
        $mail->addAddress('ecomsaakraagency@gmail.com'); // Where you want to receive mail

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <strong>Name:</strong> $name <br>
            <strong>Company:</strong> $company <br>
            <strong>Email:</strong> $email <br>
            <strong>Phone:</strong> $phone <br>
            <strong>Service:</strong> $service <br>
            <strong>Message:</strong><br>$message
        ";

        $mail->send();

        // Success response
        file_put_contents(__DIR__ . "/log.txt", "Mail sent successfully\n", FILE_APPEND);
        echo "<script>alert('Message Sent Successfully'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        // Log error
        file_put_contents(__DIR__ . "/log.txt", "Mailer Error: {$mail->ErrorInfo}\n", FILE_APPEND);
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    file_put_contents(__DIR__ . "/log.txt", "Form not submitted via POST\n", FILE_APPEND);
}
?>
