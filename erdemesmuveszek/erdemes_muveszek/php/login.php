<?php

session_start();
require_once('../config/connect.php');

if (isset($_POST['felhasznalo'])) {
    $felhasznalo = $_POST['felhasznalo'];
    $jelszo = $_POST['jelszo'];

    $sql = "SELECT az, nev FROM szemely WHERE nev = ? AND ev = ?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param('si', $felhasznalo, $jelszo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        //sikeres bejelentkezés
        $stmt->bind_result($id, $nev);
        $stmt->fetch();

        $_SESSION['nev'] = $nev;
        $_SESSION['nevaz'] = $id;

        $stmt->close();
        $link->close();

        header('Location: main.php');
    } else {
        $_SESSION['hiba'] = "Helytelen felhasználónév vagy jelszó!";
        $stmt->close();
        $link->close();
    }
}
