<?php

$json = file_get_contents('../produit.json');

$data = json_decode($json, true);

session_start();

$_SESSION['capsule'] = $data['capsule'];
$_SESSION['grain'] = $data['grain'];
$_SESSION['machine'] = $data['machine'];

?>

