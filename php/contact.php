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
<?php
include "top.php";
?>
<div id="mid">
    <?php
    include "nav.php"
    ?>
    <form method="post" action="checkUser.php" onsubmit="return validateForm()" id="section">
        <div>
            <div id="contact_top">
                <h2>Demande de contact</h2>
            </div>
            <div id="contact_container">
                <div id="contact_left">
                    <label for="date">Choisir la date</label><br>
                    <label for="nom">Nom</label><br>
                    <label for="prenom">Prénom</label><br>
                    <label for="email">Email</label><br>
                    <label>Genre</label>
                    <label></label><br>
                    <label for="dateN">Date de Naissance</label><br>
                    <label for="fonc">Fonction</label><br>
                    <label for="sujet">Sujet:</label><br>
                    <label for="conte">Contenu</label>
                </div>
                <div id="contact_right">
                    <input type="date" id="date" name="date"><br>
                    <input type="text" id="nom" name="n" placeholder="Entrez votre nom" required><br>
                    <input type="text" id="prenom" name="pm" placeholder="Entrez votre prénoms" required><br>
                    <input type="text" id="email" name="em" placeholder="abcd@gmail.com" required><br>
                    <?php if (isset($_GET['error']) && $_GET['error'] == 'email') :?>
                        <script>
                            document.getElementById('email').style.borderColor = "red";
                        </script>
                    <?php endif; ?>
                    <input type="radio" id="gH" name="genre" value="H" required>
                    <label for="gH">Homme</label>
                    <input type="radio" id="gF" name="genre" value="F" required><label for="gF">Femme</label><br>
                    <input type="date" id="dateN" name="dateDeNaissance" required><br>
                    <select id="fonc" required>
                        <option value="1">     </option>
                        <option value="2">Client</option>
                        <option value="3">Fournisseur</option>
                    </select><br>
                    <input type="text" id="sujet" name="sujet" placeholder="Entrez votre sujet de votre mail" required><br>
                    <textarea id="conte" name="conte" rows="5" cols="33" required></textarea><br>
                </div>
            </div>
            <div id="env">
                <button type="submit">Envoyer</button>


            </div>


        </div>
    </form>

</div>
<?php
include"footer.php"
?>

</body>
</html>