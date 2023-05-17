<?php
session_start();

$xml = simplexml_load_file('../user.xml');

foreach ($xml->user as $user) {
    if ($_POST['id'] == $user->email && $_POST['password'] == $user->password) {
        $_SESSION['id'] = $_POST['id'];
        header("Location: /index.php");
        exit();

    }
}
header("Location: connexion.php");
exit();
?>