<?php
session_start();
require('../config/connect.php');
require('../config/functions.php');

if (isset($_POST['felhasznalo'])){
    $felhasznalo = $_POST['felhasznalo'];
    $jelszo = $_POST['jelszo'];
    $sql = "SELECT * FROM felhasznalo WHERE nev LIKE '$felhasznalo' AND jelszo LIKE '$jelszo'";
    $result = mysqli_query($link,$sql);
    
    if (mysqli_num_rows($result) != 1){
       htmlKiir('../html/menu.html');
    } else {
        $sor = mysqli_fetch_row($result);
        $_SESSION['felhasznalo'] = $sor[0];
        $_SESSION['diak'] = $sor[4];
        if ($sor[4] == 1) {
           htmlKiir('../html/menu_diak.html');
        } else {
           htmlKiir('../html/menu_admin.html');
        }
    }
    
    
    
}

