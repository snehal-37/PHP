<?php 
session_start();

include("config.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\New\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\SMTP.php';

$n=$_POST["name"];
$e=$_POST["uemail"];
$u=$_POST["uname"];
$p=$_POST["upass"];


$sql="INSERT INTO `tourist` (`name`, `email`, `username`, `password`) VALUES ('$n', '$e', '$u', '$p');";

if (mysqli_query($conn,$sql)) {
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
        $mail->addAddress($e, 'User');
        $mail->addReplyTo('snehalgopal2003@gmail.com', 'MyTravel');
    
        
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'MyTravel-Registered Successfully..';
        $mail->Body    = 'Dear User,<br>Thank you for connecting with us.<br/><br/><b>Regards</b>,<br/><b>MyTravel</b>';
    
        $mail->send();
        header("Location:login.html");
    } catch (Exception $e) {
        echo 'Failed to send email: ', $mail->ErrorInfo;
    }
} else {
    echo "Something went wrong".mysqli_error($conn);
}

mysqli_close($conn);
?>