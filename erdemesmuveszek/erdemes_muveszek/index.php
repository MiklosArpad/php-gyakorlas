<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="login-form">
            <form action="php/login.php" method="post">
                <input type="text" placeholder="Felhasználónév" name="felhasznalo"><br>
                <input type="password" placeholder="Jelszó" name="jelszo"><br>
                <input type="submit" id="submit">
            </form>
            <?php
            session_start();
            if (isset($_SESSION['hiba'])) {
                echo $_SESSION['hiba'];
            }
            ?>
        </div>
    </body>
</html>
