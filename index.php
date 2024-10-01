<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $file = fopen("mydata.txt" , "w");
        fwrite($file , $_POST["email"] ."\n" );
        fwrite($file , $_POST["password"]);
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include"nav.php";
    require_once"products/upload.php";
     ?>
    <!-- start sliders -->

    <div class="sliders-container">
        <div class="slider">
                    <h1>BEST PRICE WITH BETTER QUALITY</h1>
                    <h2>ONLY IN OUR STORE</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione ullam soluta, iure provident cumque magnam. Sit soluta dolor inventore! Nobis aperiam maxime doloremque similique hic.</p>
                    <a class="btn btn-danger " href="#">know more</a>
        </div>
    </div>
    <div class="slider-nav">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
    </div>

    <div class="services">
        <h1>OUR SERVICES</h1>
        <div class="our-services">
            <div class="service delivery-service">
                <img src="images/car-key.png" alt="">
                <h4>DELIVERY</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="service quality-service">
                <img src="images/car.png" alt="">
                <h4>high Quality</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="service price-service">
                <img src="images/price.png" alt="">
                <h4>PRICES</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <!-- Latest Offers -->

    <div class="latest-offers">
        <h1> Latest Offers </h1>
        <div class="OurLatestOffers">
            <div class="product-offer offer1">
                <img src="images/golf7.jpg" alt="">
                <h1>GOLF 7</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <h2>20$ PER DAY</h2>
                <a class="btn btn-danger" href="orders/checkout.php">Order Now</a>
            </div>
            <div class="product-offer offer2">
                <img src="images/dacia.jpg" alt="">
                <h1>DACIA</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <h2>18$ PER DAY</h2>
                <a class="btn btn-danger" href="#">Order Now</a>
            </div>
            <div class="product-offer offer3">
                <img src="images/bmw.jpg" alt="">
                <h1>BMW</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <h2>30$ PER DAY</h2>
                <a class="btn btn-danger" href="#">Order Now</a>
            </div>
        </div>
    </div>
    <section id="contact">
  
        <h1 class="section-header">Contact</h1>
        
        <div class="contact-wrapper">
        
        <!-- Left contact page --> 
            
            <form id="contact-form" class="form-horizontal" role="form">
            
            <div class="form-group">
                <div class="col-sm-12">
                <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
                </div>
            </div>

            <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
            
            <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                <div class="alt-send-button">
                <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                </div>
            
            </button>
            
            </form>
            
        <!-- Left contact page --> 
            
            <div class="direct-contact-container">

                <ul class="contact-list">
                <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">City, State</span></i></li>
                
                <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:+212771014447" title="Give me a call">+212771014447</a></span></i></li>
                
                <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:makboulking" title="Send me an email">makboulking@gmail.com</a></span></i></li>
                
                </ul>

                <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

            </div>
            
        </div>
  
    </section>  


        <!-- start footer -->
        <footer>
            <div class="footer-content">
                <i class="fa-regular fa-copyright"></i>
                <p>2024 - Noureddine Makboul</p>
            </div>
        </footer>
        <!-- end footer -->
    <script src="js/script.js">
        
    </script>
</body>
</html>