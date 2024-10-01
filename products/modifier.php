<?php
include('../config.php');
$id = $_GET['id'];
if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_FILES['image'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $update = "UPDATE `products` SET `name`='$name', `description`='$description', `price`='$price' , `image`='$image' WHERE `Id`='$id'";
    mysqli_query($con, $update);
}
$id = $_GET['id'];
$select = "SELECT * FROM `products` WHERE `Id`='$id'";
$result = mysqli_query($con, $select);
$product = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edite product</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        form {
            width: 600px;
            padding: 20px;
            background-color: #f3f3f3;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        div {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Edite Product</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="name"> Car Name :</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description"> Descrption:</label>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br><br>

        <label for="image">Picture :</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <input type="submit" value="Edite ">
    </form>
</body>
</html>
