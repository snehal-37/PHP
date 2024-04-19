<?php 
include('config.php');


$id = $_GET["id"];

$sql = "DELETE FROM `enquiry` WHERE `enquiry`.`id` = $id";

if (mysqli_query($conn,$sql)) {
     header("Location:admin.php#request");
} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>