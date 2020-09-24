<?php
require_once 'config/init.php';
if (!isset($_SESSION['user']))
    header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <?php require_once 'html/head.html'; ?>
        <title>Felhasználók kezelése</title>
    </head>
    <body>
        <?php require_once 'html/navbar_in.html'; ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="users"></div>
                </div>
            </div>
        </div>
    </body>
</html>
