<?php
include('config.php');

$id = $_GET['id'];

$delete = "DELETE FROM `products` WHERE `Id`='$id'";
mysqli_query($con, $delete);
header("Location:/location/admin.php"); 

?>
