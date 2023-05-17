<?php
include "bdd.php";

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    if (isset($_POST['product_id']) && isset($_POST['new_stock'])) {
        $product_id = $_POST['product_id'];
        $new_stock = $_POST['new_stock'];

        try {

            $query = $connection->prepare("UPDATE produits SET stock = :stock WHERE id = :id");
            $query->bindParam(':stock', $new_stock);
            $query->bindParam(':id', $product_id);
            $query->execute();

            // Return success response
            echo json_encode(array('status' => 'success'));
        } catch (PDOException $e) {
            // Return error response if query execution fails
            echo json_encode(array('status' => 'error', 'message' => 'Query failed: ' . $e->getMessage()));
        }
    } else {
        // Return error response if parameters are missing
        echo json_encode(array('status' => 'error', 'message' => 'Missing parameters'));
    }
} else {
    // Return error response for non-AJAX requests
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));
}
?>
