<?php 

session_start();
include("config.php");

$u=$_POST["uname"];
$p=$_POST["upass"];

$sql="SELECT * FROM `tourist` WHERE `username`= '$u' AND `password`= '$p';";

$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    $_SESSION["uname"]=$u;
    $_SESSION["upass"]=$p;
    while ($rows=mysqli_fetch_assoc($result)) {
        header("Location:explore.php");
    }
} else {
    echo "Something went wrong".mysqli_error($conn);
}
mysqli_close($conn);





?>