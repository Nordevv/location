<?php



try {
    $con = mysqli_connect("localhost", "root", "", "ecommerce");

    if (!$con){
        throw new Exception("Erreur de connexion : " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Une erreur s'est produite : " . $e->getMessage();
}



?>