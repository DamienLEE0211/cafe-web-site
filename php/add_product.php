<?php
include "bdd.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$product_name = $_POST['product_name'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

if (isset($_SESSION['id'])){
    $donnees[$product_id]["stock"] = $donnees[$product_id]["stock"] - $quantity;

    if ($quantity > 0){
        if (isset($_SESSION['panier'][$product_name])) {

            $_SESSION['panier'][$product_name] += $quantity;
        } else {
            $_SESSION['panier'][$product_name] = $quantity;
        }
    }
// Préparer la réponse
    $response = array(
        'status' => 'success',
        'message' => 'Aucune erreur',
        "stock" => $donnees[$product_id]["stock"]
    );

// Renvoyer la réponse au format JSON
    http_response_code(200);

    header('Content-Type: application/json');
    echo json_encode($response);


}else{

// Préparer la réponse
    $response = array(
        'status' => 'error',
        'message' => 'Erreur'
    );

// Renvoyer la réponse au format JSON
    http_response_code(400);

    header('Content-Type: application/json');
    echo json_encode($response);


}

?>