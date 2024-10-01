<?php 

include('config.php');
if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_FILES['image'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $stmt = $con->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $name, $description, $price, $image);

    if (!$stmt->execute()) {
        echo "error " . $stmt->error;
    } 
    header("Location:/location/admin.php"); 

}

?>