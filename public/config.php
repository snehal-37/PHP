<?php 

$h="localhost";
$u="root";
$p="";
$db="travel";

$conn=mysqli_connect($h,$u,$p,$db);

if (!$conn) {
    echo "Not Connected".mysqli_connect_error();
}

?>


