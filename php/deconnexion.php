<?php
session_start();

unset($_SESSION["id"]);
unset($_SESSION['panier']);
header("Location: connexion.php");
exit();
?>