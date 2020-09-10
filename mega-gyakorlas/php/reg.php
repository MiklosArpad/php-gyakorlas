<?php

require_once '../config/connect.php';

// logikai fájl aki a regeisztrációt feldolgozza...
// szerver válaszok fajtái:
// 1) echo
// 2) header (tartalmat ad vissza -> ez másik erőforrás lehet...
// 3) http válaszkódok

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // regisztráció folyamata ...

    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $jelszo = $_POST['jelszo'];

    $sql = 'INSERT INTO felhasznalok (Nickname, Email, Jelszo) '
            . 'VALUES (?, ?, ?);';

    $stmt = $con->prepare($sql);
    $stmt->bind_param('sss', $nickname, $email, $jelszo);
    $stmt->execute();

    $stmt->close();
    $con->close();

    //echo 'Nickname: ' . $_POST['nickname'] . '<br>';
    //echo 'E-mail cím: ' . $_POST['email'] . '<br>';
    //echo 'Jelszó: ' . $_POST['jelszo'] . '<br>';
    //header('Location: ../index.php');
    // ha nem ajax-szal hajtanánk ezt a fájlt (reg.php) végre, akkor még el is irányítana oda
    // ajaxnál csak visszaadja
    //http_response_code(200); // HTTP-kód küldés szerverről kliensre
    // ajax függvény success ágába fut
} else {
    http_response_code(403);
}
