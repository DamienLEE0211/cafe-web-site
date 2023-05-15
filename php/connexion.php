<?php
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}
?>
<?php
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/connexion.css">
<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<head>
    <meta charset="UTF-8">
    <title>Love Barista</title>
</head>
<body>
<header>
    <form class="cx_main" action="verify.php" method="post">
        <div id="cx_left">
        </div>
        <div id="cx_right">
            <div id="wrap">
                <span class="login_top">Login</span>
                <div class="login">
                    <div class="login_field">
                        <i class='fas fa-user-alt'></i>
                        <input type="text" name="id" class="login_input" placeholder="Email" required>
                    </div>
                    <div class="login_field">
                        <i class='fas fa-lock'></i>
                        <input type="password" name="password" class="login_input" placeholder="Password" required>
                    </div>
                    <div class="text-right">
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="button login_submit" value="Log In">
                        Login
                        <i class="button_icon fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </form>

</header>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/connexion.css">
<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<head>
    <meta charset="UTF-8">
    <title>Love Barista</title>
</head>
<body>
<header>
    <form class="cx_main" action="verify.php" method="post">
        <div id="cx_left">
        </div>
        <div id="cx_right">
            <div id="wrap">
                <span class="login_top">Login</span>
                <div class="login">
                    <div class="login_field">
                        <i class='fas fa-user-alt'></i>
                        <input type="text" name="id" class="login_input" placeholder="Email" required>
                    </div>
                    <div class="login_field">
                        <i class='fas fa-lock'></i>
                        <input type="password" name="password" class="login_input" placeholder="Password" required>
                    </div>
                    <div class="text-right">
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="button login_submit" value="Log In">
                        Login
                        <i class="button_icon fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </form>

</header>


</body>
</html>
