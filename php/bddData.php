<?php
    $server = "localhost";
    $bdname = "lovebarista";
    $username = "lovebarista1";
    $password = "bdd123";

    require_once "bdd.php";

    if(connexion($server,$username,$password,$bdname)){
        $_SESSION['categories'] = retrieveCategories();

        deconnexion();
    }
?>
