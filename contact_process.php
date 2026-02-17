<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/PHPMailer.php';
require 'mail/SMTP.php';
require 'mail/Exception.php';

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cnc_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$services = $_POST['services'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Save to database
$stmt = $conn->prepare("INSERT INTO cnc_contact_form (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);
$stmt->execute();
$stmt->close();
$conn->close();

// Send Email
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'craftsncloud@gmail.com';
    $mail->Password   = 'hxkh ndwq regk tqrg'; // put Gmail App Password here
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('craftsncloud@gmail.com', 'Website Contact');
    $mail->addAddress('craftsncloud@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "New Contact Message: $subject";
    $mail->Body    = "
        <h3>New Message Received</h3>
        <b>Name:</b> $name <br>
        <b>Email:</b> $email <br>
        <b>Services:</b> $services <br>
        <b>Subject:</b> $subject <br>
        <b>Message:</b><br>$message ";

    $mail->send();
    header("Location: contact.php?status=success");
    exit();
    header("Location: contact.php?status=error");
    exit();

} catch (Exception $e) {
    echo "Saved to database but email failed: {$mail->ErrorInfo}";
}
?>
