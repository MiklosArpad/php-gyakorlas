<?php

require_once '../config/connect.php';

// Ellenőrízzük le, hogy tényleg POST http metódussal érkezik-e kliensből szerverre az id...
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id']; // az ajax kérésben a data{kulcs:érték} a kulcs nevét kell a $_POST[]-ba beírni...
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];

    # echo $id; #TESZT JELLEGGEL KIÍRATOM, TÉNYLEG MEGJÖN-E
    # echo $nickname; #TESZT JELLEGGEL KIÍRATOM, TÉNYLEG MEGJÖN-E
    # echo $email; #TESZT JELLEGGEL KIÍRATOM, TÉNYLEG MEGJÖN-E

    $sql = "UPDATE felhasznalok SET Nickname = ?, Email = ? WHERE Id = ?;";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssi', $nickname, $email, $id);
    $stmt->execute();

    $stmt->close();
    $con->close();
}
