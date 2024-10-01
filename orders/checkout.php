<?php 
include("../nav.php");
include('config.php');

$message = '';


$select = "SELECT * FROM `products`";
$data = mysqli_query($con, $select);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="orderform" class=" container orderCar">
        <form action="order.php" method="post"  >
            <div class="mb-3">
                <label class="form-label">Full Nmae :</label>
                <input name="fullname" type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <labe class="form-label">Email :</label>
                <input name="email" type="email" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Phone :</label>
                <input name="phone" type="number" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Address :</label>
                <textarea class"form-label" name="address" ></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Duration :</label>
                <input name="duration" type="number" placeholder="HOW MANY DAYS ??" class="form-control" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary" name="order" > Submit</button>
    </form>
    </div>
</body>
</html>