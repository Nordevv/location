<?php
include"nav.php";
include('products/config.php');
$message = '';
$select = "SELECT * FROM `products`";
$data = mysqli_query($con, $select);
$select_orders = "SELECT * FROM `orders`";
$data_orders = mysqli_query($con, $select_orders);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin</title>
    <style>
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
        section{
            padding:5px 20px;
            background-color:#B5CFB7;
        }
        section ul{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        section ul li a{
            margin:0 15px;
        }
    </style>
</head>
<body>
    <section>
        <ul>
            <li><a id="orders" class="btn btn-primary" >ORDERS</a></li>
            <li><a id="products"  class="btn btn-primary">CARS & BIKES</a></li>
            <li><a id="addproduct"  class="btn btn-primary">ADD CAR</a></li>
            <li><a id="addorder"  class="btn btn-primary">ADD ORDER</a></li>
        </ul>
    </section>
    <div id="_products" class="products" >
        <table> 
            <tr>
                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data)) {
                echo "<tr><td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td>".$row['price']."$"."</td>";
                echo "<td><a href=\"modifier.php?id=".$row['id']."\">Modifier</a></td>";
                echo "<td><a href=\"products/supprimer.php?id=".$row['id']."\" >Supprimer</a></td></tr>";
            }
        ?> 
        </table>
    </div>
    <div id="_addproduct" class=" container addproduct" >
        <form action="products/upload.php" method="post" enctype="multipart/form-data">

            <div class="mb-3">
            <label class="form-label" for="name"> Care Name :</label>
            <input class="form-control" type="text" id="name" name="name" required>
            </div>

            <div class="mb-3">
            <label class="form-label" for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" cols="50" required></textarea>
            </div>

            <div class="mb-3">
            <label class="form-label" for="price">price:</label>
            <input class="form-control" type="text" id="price" name="price" required>
            </div>

            <div class="mb-3">
            <label class="form-label" for="image">Picture:</label>
            <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
            </div>

            <input class="btn btn-primary" type="submit" value=" Add Car">
        </form>
    </div>

    <div id="_orders" class="orders" >
        <table> 
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Duration</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data_orders)) {
                echo "<tr><td>".$row['id']."</td>";
                echo "<td>".$row['fullname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['duration']."</td>";
                echo "<td><a href=\"modifier.php?id=".$row['id']."\">Modifier</a></td>";
                echo "<td><a href=\"orders/supprimer.php?id=".$row['id']."\" >Supprimer</a></td></tr>";
            }
        ?> 
        </table>
    </div>
    <div id="_addorder" class=" container addorder" >
        <form action='orders/upload.php' method="post" enctype="multipart/form-data">

            <div class="mb-3" >
                <label class="form-label" for="name"> Full Name:</label>
                <input class="form-control" type="text" id="name" name="fullname" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="description">Email :</label>
                <input class="form-control" id="description" name="email" rows="4" cols="50" required></input>
            </div>

            <div class="mb-3">
                <label class="form-label" for="price">Phone:</label>
                <input class="form-control" type="text" id="price" name="phone" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="price">address:</label>
                <input class="form-control" type="text" id="price" name="address" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="price">Duration:</label>
                <input type="text" id="price" name="duration" required>
            </div>

            <br><br>


            <input class="btn btn-primary" type="submit" value="Add Order " name="add_order" >
        </form>
    </div>
    <script src="js/admin.js"></script>
</body>
</html>