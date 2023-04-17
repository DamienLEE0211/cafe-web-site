<?php
session_start();

$email = $_POST['em'];

$xml = simplexml_load_file('../user.XML');

$matchFound = false;

foreach ($xml->user as $user) {

    if ($user->email == $email) {
        $_SESSION['email'] = $email;
        $matchFound = true;
        break;
    }
}

if ($matchFound) {

    header('Location: success.php?message=success');
} else {
    header('Location: contact.php?error=email');
}

