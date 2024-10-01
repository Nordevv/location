<?php
include('config.php');

$message = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['oreder'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['pheone'];
        $address = $_POST['address'];
        $duration = $_POST['duration'];
        if (!empty($fullname) && !empty($email) && !empty($phone) && !empty($address) && !empty($duration) ) {
            $insert = "INSERT INTO `orders` (`fullname`, `email`, `phone`, `address`, `duration`) VALUES ('$fullname','$email','$phone','$address','duration')";
            mysqli_query($con, $insert);
        } else {
            $message = "Tous les champs doivent être remplis.";
        }
    }
}

$select_orders = "SELECT * FROM `orders`";
$data_orders = mysqli_query($con, $select_orders);
?>


<?php 

include('config.php');
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['duration'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $duration = $_POST['duration'];

    $insert = "INSERT INTO `orders` (`fullname`, `email`, `phone`, `address`, `duration`) VALUES ('$fullname','$email','$phone','$address','duration')";
    mysqli_query($con, $insert);
    header("Location:/formation/exercices/Noureddine%20Makboul/index.php"); 
}