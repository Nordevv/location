<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+BE+VLG:wght@100..400&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    text-decoration: none;
    list-style: none;
}
html{
    scroll-behavior:smouth;
}
a{
    border: none;
}

html{
    scroll-behavior: smooth ;
}
.last-offer{
    background-color: #222831;
    width: 100%;
    height: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 30px;
}
.last-offer .social-media i{
    color: white;
    margin-right: 5px;
    cursor: pointer;
}
.last-offer h4{
    color: white;
    font-size:14px;
    font-weight: 700;
}
.last-offer .fa-xmark{
    color: black;
    font-size: 16px;
    background-color: white;
    border-radius: 50% ;
    padding: 3px;
    cursor: pointer;
}


header{
    width: 100%;
    height: 65px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 100px;
    background-color: white;
    border-bottom: 1px solid black;
}
.gender-type{
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 900;
}
.gender-type :first-child{
    margin-right: 15px;
}
.logo a{
    color: black;
    cursor: pointer;
    font-weight: 800;
    font-family: "Playwrite BE VLG", cursive;
}
nav ul{
    display: flex;
    justify-content: center;
    align-items: center;
}
nav ul li {
    color:black;
    display: block;
    margin-right: 5px;
    font-weight: 900;
    padding: 6px ;
    transition: 0.2s;
    border-radius: 30px;
}
nav ul li i{
    font-size: 20px;
}


nav ul li a:active{
    background: #675cff;
    color: black;
}
nav .logo-nav{
    display: none;
}
.menu{
    display: none;
}
.menu {
    font-size: 24px;
    color:black;
    cursor: pointer;
}
@media only screen and (max-width:780px){
    header{
        position: fixed;
        justify-content: space-between;
        padding: 10px 80px;
    }
    nav{
        position: absolute;
        left: -350px;
        top: 0;
        z-index: 100;
        width: 180px;
        height: 100vh;
        border-radius:0 50px 50px 0;
        background-color: #fefefe;
        transition: 0.4s;
        box-shadow: 2px 0 20px 0 rgba(0, 0, 0,0.05);
    }
    .logo-nav a{
        color: black;
    }
    .logo-nav h1 span{
        color: blue;
    }
    nav .logo-nav{
        display: block;
        height: 70px;
        display: flex;
        align-items: center;
        margin-left: 30px;
    }
    .nav.active{
        position: absolute;
        left: 0;
    }
    nav ul{
        display: block;
        padding: 0 20px;
        margin-top: 30px;
    }
    nav ul li {
        margin: auto;
        margin-bottom: 5px;
        padding: 10px 15px;
        border-radius: 5px;
        color: black;
    }
    .menu{
        display: block;
    }
    .last-offer .social-media , .last-offer .fa-xmark{
        display: none;
    }
    .last-offer h4{
        margin: 0 auto;
    }

}
.scription{
    position: absolute;
    z-index: 200;
    left: 50%;
    top: 320px;
    transform: translate(-50% , -50%);
    width: 60%;
    height: 70vh;
    display: none;
    border-radius:30px;
    animation: orange-child 0.5s linear 0s 1 normal both ;
}
@keyframes orange-child{
    0%{
        opacity: 0.2 ;
    }
    50%{
        opacity: 0.5 ;
    }
    100%{
    }

}
.scription-image{
    width: 50%;
    height: 100%;
    background-image: url("../images/dacia.jpg");
    background-position: bottom;
    background-size: cover;
    border-radius: 30px 0 0 30px;
}
.scription-tools{
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    background-color: white;
    border-radius: 0 30px 30px 0;
}
.scription-tools .sign{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
    width: 100%;
}
.scription-tools .sign a{
    background-color: black;
    color: white;
    font-weight: 900;
    text-align: center;
    padding: 8px 0;
    border-radius: 30px;
    width: 80%;
}
.sign-in{
    position: absolute;
    z-index: 101;
    left: 50%;
    top: 320px;
    transform: translate(-50% , -50%);
    width: 60%;
    height: 70vh;
    display: none;
    border-radius:30px;
    animation: orange-child 0.5s linear 0s 1 normal both ;
}
.sign-in-image{
    width: 50%;
    height: 100%;
    background-image: url("../images/dacia.jpg");
    background-position: bottom;
    background-size: cover;
    border-radius: 30px 0 0 30px;
}
.sign-in-tools{
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    padding: 20px 0;
    background-color: white;
    border-radius: 0 30px 30px 0;
}
.sign-with div{
    display: flex;
    margin-top: 10px;
}
.sign-with a i{
    margin: 0 10px;
    font-size: 25px;
}
.sign-in-tools form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
    width: 100%;

}
.sign-in-tools form input{
    width: 90%;
    height: 35px;
    text-align: center;
    color: black;
    border-radius: 30px;
}
.sign-in-tools form .submitting{
    background-color: red;
    font-weight: 700;
    font-size: 16px;
    cursor: pointer;
}

.sign-up{
    position: absolute;
    z-index: 101;
    left: 50%;
    top: 320px;
    transform: translate(-50% , -50%);
    width: 60%;
    height: 90vh;
    display: none;
    border-radius:30px;
    animation: orange-child 0.5s linear 0s 1 normal both ;
}
.sign-up-image{
    width: 50%;
    height: 100%;
    background-image: url("../images/dacia.jpg");
    background-position: bottom;
    background-size: cover;
    border-radius: 30px 0 0 30px;
}
.sign-up-tools{
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    padding: 20px 0;
    background-color: white;
    border-radius: 0 30px 30px 0;
}

.sign-with a i{
    margin: 0 10px;
    font-size: 25px;
}
.sign-up-tools form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
    width: 100%;
}
.sign-up-tools form input{
    width: 90%;
    height: 35px;
    text-align: center;
    color: black;
    border-radius: 30px;
}
.sign-up-tools form .submitting{
    font-weight: 700;
    font-size: 16px;
    cursor: pointer;
}

@media only screen and (max-width:780px){
    .sign-up-image , .sign-in-image , .scription-image{
        display: none;
    }
    .sign-up , .sign-in , .scription{
        width: 100%;
        height: 80vh;
        z-index: 80;
    }
    .scription-tools , .sign-in-tools , .sign-up-tools{
        background-color: #B9B4C7;
        width: 100%;
        border-radius: 30px;
    }
    .product{
        height: fit-content;
    }

}

    </style>
</head>
<body>
    <div class="last-offer" >
        <div class="social-media">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-telegram"></i>
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <h4>FREE SHIPPING <span>in orders over 99$</span></h4>
        <i class="fa-solid fa-xmark"></i>
    </div>
    <header>
        <div class="logo">
            <a class="btn" href="/formation/exercices/Noureddine%20Makboul/index.php"">NLC</a>
        </div>
        <nav class="nav" >
            <div class="logo-nav">
                <a href="/formation/exercices/Noureddine%20Makboul/index.php">NLC</h1></a>
            </div>
            <ul>
                <li><a class="btn" href="/location/index.php">HOME</a></li>
                <li><a class="btn" href="/location/cars.php">CARS</a></li>
                <li><a class="btn"href="/location/about.php">ABOUT</a></li>
                <li><a class="btn" href="/location/index.php #contact">CONTACT</a></li>
                <!-- <li><a class="btn" href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li> -->
                <li><a class="btn" href="/location/sign.php" ><i id="user-logo"  class="fa-regular fa-user"></i></a></li>
                <!-- <li><a class="btn" href="#"><i  class="fa-solid fa-cart-shopping"></i></a></li> -->
            </ul>
            
        </nav>
        <div class="menu">
            <i class="fa-solid fa-bars open-menu"></i>
        </div>
    </header>

    <script>
        menu = document.querySelector(".menu");
        menu.onclick = function(){
        let nav = document.querySelector(".nav");
        nav.classList.toggle("active");
        var like= document.getElementById("like");
        like.addEventListener("click" , function(){
            alert("like it");
        })

    </script>
</body>
</html>