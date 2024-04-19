<?php 

session_start();

include("config.php");

$uname=$_POST["uname"];
$pass=$_POST["upass"];

$sql="SELECT * FROM `admin` WHERE `uname`= '$uname' AND `pass`= '$pass';";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
    $_SESSION["uname"]=$uname;
    $_SESSION["upass"]=$pass;
    while ($rows=mysqli_fetch_assoc($result)) {
        header("Location:admin.php");
    }
} else {
    echo "Something went wrong".mysqli_error($conn);
}
mysqli_close($conn);





?>