<?php 
include("config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\New\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\New\PHPMailer\src\SMTP.php';

$i=$_POST["id"];
$n=$_POST["name"];
$e=$_POST["email"];
$u=$_POST["uname"];
$p=$_POST["pass"];

$sql="UPDATE `tourist` SET `name`='$n',`email`='$e',`username`='$u',`password`='$p' WHERE `tourist`.`id`=$i";

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
        $mail->Subject = 'MyTravel-Your Details Updated Successfully..';
        $mail->Body    = 'Dear User,<br/>As per your request your account has been updated.<br/>Following are your updated credentials <br/> Name: '.$n.'<br/>'.'Email: '.$e.'<br/>'.'Username: '.$u.'<br/>'.'Password: '.$p.'<br/><br/><b>Regards</b>,<br/><b>MyTravel</b>';
    
        $mail->send();
        header("Location:admin.php");
    } catch (Exception $e) {
        echo 'Failed to send email: ', $mail->ErrorInfo;
    }
}else {
    echo "Something went wrong".mysqli_error($conn);
}
mysqli_close($conn);

?>