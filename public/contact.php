<?php 
include("config.php");

$cname=$_POST["cname"];
$cemail=$_POST["cemail"];
$query=$_POST["carea"];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\New\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\SMTP.php';


$sql="INSERT INTO `queries` (`name`, `email`, `query`) VALUES ('$cname', '$cemail', '$query');";

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
    $mail->addAddress($cemail, $cname);
    $mail->addReplyTo('snehalgopal2003@gmail.com', 'MyTravel');

    
    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'MyTravel-Submitted Successfully..';
    $mail->Body    = 'Dear User,<br/>Your query is submitted successfully...We are looking forward in it.<br/><br/><b>Regards</b>,<br/><b>MyTravel</b>';

    $mail->send();
    header("Location:index.html");
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}

} else {
    echo "Something went wrong".mysqli_error($conn);
}

mysqli_close($conn);




?>