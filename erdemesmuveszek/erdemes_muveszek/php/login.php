<?php
session_start();    
require_once('../config/connect.php');
    
    if (isset($_POST['felhasznalo'])){
        $felhasznalo = $_POST['felhasznalo'];
        $jelszo = $_POST['jelszo'];
        
        $sql = "SELECT * FROM szemely WHERE nev = '$felhasznalo' AND ev = '$jelszo'";
        $res = mysqli_query($link, $sql);
        
        if (mysqli_num_rows($res) == 1){
            //sikeres bejelentkezés
            $sor = mysqli_fetch_assoc($res);
            $_SESSION['nev'] = $sor['nev'];
            $_SESSION['nevaz'] = $sor['az'];
            header('Location: main.php');
        } else {
            $_SESSION['hiba'] = "Helytelen felhasználónév vagy jelszó!";
        }
        
    }

?>
