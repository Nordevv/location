<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cars</title>
</head>
<body>
    <?php 
    include"nav.php";
    require_once"config.php";
    require_once"products/upload.php";
    ?>
        <!-- ------------- our products ------------->
        <div class="products">
        <h1>POPULAR PRODUCT</h1>
        <div class="our-products">
        <?php
        $sql = "SELECT id, name, description, price, image FROM products";
        $result = $con->query($sql);
        while($row = $result->fetch_assoc()) {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <div class="product" >
                    <div class ='image-container'>
                        <?php 
                        $imageData = $row['image'];
                        $base64 = base64_encode($imageData);
                        echo '<img src="data:image/jpeg;base64,' . $base64 . '" alt="Product Image">';
                        ?>
                    </div>
                    <?php
                    echo "<hr>";
                    echo "<h1>" . htmlspecialchars($row["name"]) . "</h1>";
                    echo "<p> " . htmlspecialchars($row["description"]) . "</p>";
                    echo "<h2> " . htmlspecialchars($row["price"]) . "$ Per Day". "</h2>";                    
                    ?>
                    <div >
                        <a id='like' class="addtocart btn btn-primary" href="">Like</a>
                        <a id="ordercar" class="buynow btn btn-danger" href="orders/checkout.php">Order Now</a>
                    </div>
                </div>
            </body>
            </html>
            <?php
        }
    ?>  
        </div>
    </div>    


</body>
</html>