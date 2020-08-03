<?php 
require_once '../config/connect.php';
$sql = "INSERT INTO termekek (nev, leiras, ar, kid) VALUES (?,?,?,?)";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $stmt = $conn -> prepare($sql);
    $nev = $_POST['nev'];
    $leiras = $_POST['leiras'];
    $ar = $_POST['ar'];
    $kid = $_POST['kategoria'];
    $stmt -> bind_param("ssii", $nev, $leiras, $ar, $kid);
    $stmt -> execute();
    $stmt -> close();
    $conn -> close();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Termékek feltöltése</title>
        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../js/feltolt.js"></script>
    </head>
    <body>
        <h2>Termékek feltöltése</h2>
        <form method="post" action="#">
            <input type="text" name="nev">
            <br>
            <textarea name="leiras" cols="50" rows="5"maxlength="255"></textarea>
            <span id="szoveghossz">255</span>
            <br>
            <input type="number" min="0" max="20000" name="ar">
            <br>
            <select name="kategoria">
                
            </select>
            <br>
            <button>Mentés</button>
        </form>
        <?php
        
        ?>
    </body>
</html>
