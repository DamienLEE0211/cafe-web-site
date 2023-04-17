<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/tp.css">
<head>
    <script type="text/javascript" src="../js/tp.js"></script>
    <meta charset="UTF-8">
    <title>Love Barista</title>
</head>
<body>
<div id="overlay" onclick="closeImg();">
    <img id="overlay-image">
</div>

<?php
include "top.php";
?>

<div id="mid">
    <?php
    include "nav.php";
    if (isset($_GET['message']) && $_GET['message'] == 'success') {

        echo '<p id="msg_success">Demande est envoyé ' . $_SESSION['email'] . '.</p>';

        unset($_SESSION['email']);
    } else {

        header('Location: contact.php');
    }
    ?>
</div>
<?php
include"footer.php";
?>

</body>
</html>