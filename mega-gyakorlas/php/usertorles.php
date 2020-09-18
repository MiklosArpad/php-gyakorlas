<?php

require_once '../config/connect.php';

// Ellenőrízzük le, hogy tényleg POST http metódussal érkezik-e kliensből szerverre az id...
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id']; // az ajax kérésben a data{kulcs:érték} a kulcs nevét kell a $_POST[]-ba beírni...
    // echo $id; TESZT JELLEGGEL KIÍRATOM, TÉNYLEG MEGJÖN-E

    $sql = "DELETE FROM felhasznalok WHERE id = ?;";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $stmt->close();
    $con->close();
}
