<?php 
include('config.php');


$id = $_GET["id"];

$sql = "DELETE FROM `tourist` WHERE `tourist`.`id` = $id";

if (mysqli_query($conn,$sql)) {
     header("Location:admin.php#users");
} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>