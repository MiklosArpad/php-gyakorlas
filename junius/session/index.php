<!DOCTYPE html>
<html>
    <head>
        <title>Főoldal</title>
        <?php //echo file_get_contents('head.html'); ?>
        <?php require_once 'html/head.html'; ?>
    </head>
    <body>
        <?php require_once 'html/navbar_kijelentkezett_allapot.html'; ?>
        <h1 class="text-center">Belépés</h1>
        <form class="box" method="post" action="php/login.php">
            <input class="form-control" type="text" name="username" placeholder="Felhasználónév" required>
            <br>
            <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
            <br>
            <input id="login" class="btn btn-primary" type="submit" value="Belépés">
            <!-- ha <form> tagben olyan type attr. aminek submit az értéke,
            akkor az az egész form tartalmát elküldi szerver oldalra és végez a
            form kitöltésével -->
            <?php
            session_start();

            if (isset($_SESSION['munkamenet'])) {
                header('Location: autohirdetesek.php');
            }

            if (isset($_SESSION['error'])) {
                echo '<h2 class="text-center">' . $_SESSION['error'] . '</h2>';
            }
            ?>
        </form>
    </body>
</html>
