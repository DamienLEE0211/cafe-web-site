<?php
include "bdd.php";
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
    <div id="section">
        <div class="tb_section">
            <table>
                <tr>
                    <td>Produit</td>
                    <td>Nom</td>
                    <td>Description</td>
                    <td>Prix</td>
                    <td id="stock-head">Stock</td>
                    <td>Quantité</td>
                </tr>
                <?php
                if (!isset($_SESSION['panier'])) {
                    $_SESSION['panier'] = array();
                }

                foreach ($donnees as $index => $produit) {
                    if($produit["categories_id"] == $_GET["categorie"]){
                        echo '
                        <form method="post">
                            <tr>
                                <td><img src="' . $produit["image"] . '" height="90px" onclick="zoomImg(this)" class="image-Boutique" alt="' . $produit["nom"] . '"></td>
                                <td>' . $produit["nom"] . '</td>
                                <td>' . $produit["description"] . '</td>
                                <td>' . $produit["prix"] . '</td>
                                <td class="stock">' . $produit["stock"] . '</td>
                                <td>
                                    <button class="minus-btn" type="button" onclick="decreaseValue(this)">-</button>
                                    <input class="qt" name="quantity" type="text" value="0" id="quantity1"/>
                                    <button class="plus-btn" type="button" onclick="increaseValue(this)">+</button>
                                    <br>
                                    <input type="hidden" name="product_id" value="' . $index . '">
                                    <input type="hidden" name="product_name" value="' . $produit["nom"] . '">
                                    <input type="hidden" name="product_price" value="' . $produit["prix"] . '">
                                   
                                    <button type="button" class="ajouter" name="add_to_cart" onclick="updateStock(this)">Ajouter/Commander</button>
                                   
                                </td>
                            </tr>
                        </form>';
                    }

                }
                ?>
            </table>
        </div>
        <button class="MCB" onclick="cacherStock()">Montrer/Cacher stock</button>
    </div>
</div>

<?php
include "footer.php"
?>

</body>
</html>
