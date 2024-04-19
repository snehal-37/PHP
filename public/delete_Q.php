<?php 
include('config.php');


$id = $_GET["id"];

$sql = "DELETE FROM `queries` WHERE `queries`.`id` = $id";

if (mysqli_query($conn,$sql)) {
     header("Location:admin.php#queries");
} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>