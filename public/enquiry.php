<?php 
include("config.php");

$ename=$_POST["ename"];
$earea=$_POST["earea"];
$date=$_POST["date"];
$day=$_POST["number"];
$eemail=$_POST["eemail"];
$enum=$_POST["enum"];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\New\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\SMTP.php';


$sql="INSERT INTO `enquiry` (`name`, `text`, `date`, `day`, `email`, `number`) VALUES ('$ename', '$earea', '$date', '$day', '$eemail', '$enum');";

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
    $mail->addAddress($eemail, $ename);
    $mail->addReplyTo('snehalgopal2003@gmail.com', 'MyTravel');

    
    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'MyTravel-Form Submitted Successfully..';
    $mail->Body    = 'Dear User,<br/>Thank you...Soon you will receive your tour related updates.<br/><br/><b>Regards</b>,<br/><b>MyTravel</b>';

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