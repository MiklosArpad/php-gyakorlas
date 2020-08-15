<?php
session_start();    
require_once('../config/connect.php');
    
    if (isset($_POST['felhasznalo'])){
        $felhasznalo = $_POST['felhasznalo'];
        $jelszo = $_POST['jelszo'];
        
        $sql = "SELECT * FROM szemely WHERE nev = '$felhasznalo' AND ev = '$jelszo'";
        $res = $link->query($sql);
        
        if ($res->num_rows == 1){
            //sikeres bejelentkezés
            $sor = $res->fetch_assoc($res);
            $_SESSION['nev'] = $sor['nev'];
            $_SESSION['nevaz'] = $sor['az'];
            header('Location: main.php');
        } else {
            $_SESSION['hiba'] = "Helytelen felhasználónév vagy jelszó!";
        }
        
    }

?>
