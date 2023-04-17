<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];

if (isset($_SESSION['id'])){
    if ($quantity > 0){
        if (isset($_SESSION['panier'][$product_name])) {

            $_SESSION['panier'][$product_name] += $quantity;
        } else {
            $_SESSION['panier'][$product_name] = $quantity;
        }
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}else{
    header('Location: verify.php');
    exit();
}

?>