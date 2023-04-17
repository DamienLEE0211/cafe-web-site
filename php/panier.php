<?php
include "varSession.inc.php";
if (!isset($_SESSION['id'])){
    header('Location: connexion.php ');
    exit();
}

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
    include "nav.php"
    ?>
    <div class="content">
        <h1 class="panier">panier</h1>

            <?php
            if (empty($_SESSION['panier'])) {
                echo '<h4 class="vide">"Le panier est vide."<h4>';

            }else{
                echo "<table class='tabPanier'>";
                echo "<tr><th>Produit</th><th>Quantité</th></tr>";

                foreach ($_SESSION['panier'] as $product_id => $product) {
                    echo "<tr>";
                    echo "<td>" . $product_id .  "</td>";
                    echo "<td>" . $product . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
    </div>
</div>
<?php
include"footer.php";
?>

</body>
</html>
