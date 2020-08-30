<?php
session_start();

if (!isset($_SESSION['munkamenet'])) { // ha nincs munkamenet nevű session
    header('Location: index.php'); // akkor azonnal visszairányít a főoldara
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Autóhirdetések</title>
        <?php //echo file_get_contents('head.html');   ?>
        <?php require_once 'html/head.html'; ?>
    </head>
    <body>
        <?php require_once 'html/navbar_bejelentkezett_allapot.html'; ?>
        <h3>Szép napot, <?php echo $_SESSION['username']; ?>!</h3>
        <h1 class="text-center">Autó hirdetések nyilvántartása</h1>
        <button id="auto_megjelenit" class="btn btn-primary">Autóhirdetések megjelenítése</button>
        <div id="autotablazat"></div>
        <div id="szures_marka"></div>
    </body>
</html>
