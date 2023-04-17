<?php

echo('
<header>
    <img src="../img/loveBarista.png" id="logo" alt="Love Barista">
    <h1>Love Barista</h1>
    <div id="top-icon">');
if(isset($_SESSION['id'])) {
    echo('
        <a href="deconnexion.php">
            <img id="deconnexion-icon" src="../img/decon.png" alt="deconnexion">
        </a>');
} else {
    echo('
        <a href="connexion.php">
            <img id="connexion-icon" src="../img/connexion.png" alt="connexion">
        </a>');
}

echo('
        <a href="panier.php">
            <img id="pannier-icon" src="../img/pannier.png" alt="pannier">
        </a>
    </div>
</header>');
?>