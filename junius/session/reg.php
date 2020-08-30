<!DOCTYPE html>
<html>
    <head>
        <title>Regisztráció</title>
        <?php require_once 'html/head.html'; ?>
    </head>
    <body>
        <?php require_once 'html/navbar_kijelentkezett_allapot.html'; ?>
        <h2 class="text-center">Regisztrációs űrlap</h2>
        <form class="box" method="post" action="php/registration.php">
            <input class="form-control" type="text" name="username" placeholder="Felhasználónév" required>
            <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
            <input name="regButton" class="btn btn-primary" type="submit" value="Regisztráció">
        </form>
        <?php
        session_start();
        if (isset($_SESSION['reg_error'])) {
            echo '<h2 class="text-center">' . $_SESSION['reg_error'] . '</h2>';
        }
        ?>
    </body>
</html>
