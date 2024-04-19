<?php 

$semail=$_POST["semail"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\New\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\SMTP.php';

$mail = new PHPMailer(true);

$email = 'snehalgopal2003@gmail.com';
$password = 'jkzr uqes iish cdwx';

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 25;

    // Recipient information
    $mail->setFrom('snehalgopal2003@gmail.com', 'MyTravel');
    $mail->addAddress($semail, 'User');
    $mail->addReplyTo('snehalgopal2003@gmail.com', 'MyTravel');

    
    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'MyTravel-Subscribed Successfully...';
    $mail->Body    = 'Dear User,<br>Thank you for connecting with us. You are subscribed successfully.<br/><br/><b>Regards</b>,<br/><b>MyTravel</b>';

    $mail->send();
    header("Location:index.html");
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}

?>