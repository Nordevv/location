<?php
include('config.php');

$id = $_GET['id'];

$delete = "DELETE FROM `orders` WHERE `Id`='$id'";
mysqli_query($con, $delete);
header("Location:/formation/exercices/Noureddine%20Makboul/admin.php"); 

?>
