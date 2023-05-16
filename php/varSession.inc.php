<?php

// Database configuration
$server = "localhost";
$username = "lovebarista1";
$password = "bdd123";
$dbname = "lovebarista";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch categories from the database
    $stmt = $conn->query("SELECT * FROM categories");
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Fetch products from the database
    $stmt = $conn->query("SELECT * FROM produits");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Store categories and products in $_SESSION
    session_start();
    $_SESSION['capsule'] = [];
    $_SESSION['grain'] = [];
    $_SESSION['machine'] = [];

    foreach ($categories as $category) {
        foreach ($products as $product) {
            if ($product['categories_id'] === $category['id']) {
                if ($category['nom'] === 'Grain') {
                    $_SESSION['grain'][] = $product;
                } elseif ($category['nom'] === 'Machine') {
                    $_SESSION['machine'][] = $product;
                } elseif ($category['nom'] === 'Capsule') {
                    $_SESSION['capsule'][] = $product;
                }
            }
        }
    }

    // Close the database connection
    $conn = null;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
