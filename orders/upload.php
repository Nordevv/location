<?php 
include('config.php');

$message = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['add_order'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $duration = $_POST['duration'];
        if (!empty($fullname) && !empty($email) && !empty($phone) && !empty($address) && !empty($duration)) {
            $insert = "INSERT INTO `orders` (`fullname`, `email`, `phone`, `address`, `duration`) VALUES ('$fullname','$email','$phone','$address', '$duration')";
            mysqli_query($con, $insert);
            header("Location:../admin.php"); 
        } else {
            $message = "Tous les champs doivent être remplis.";
        }
    }
}


$select_orders = "SELECT * FROM `orders`";
$data_orders = mysqli_query($con, $select_orders);
?>




