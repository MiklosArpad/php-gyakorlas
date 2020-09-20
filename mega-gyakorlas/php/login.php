<?php

require_once '../config/connect.php';
require_once '../config/init.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $nickname = $_POST['nickname'];
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM felhasznalok WHERE Nickname = ? AND Jelszo = ?;";

    $stmt = $con->prepare($sql);
    $stmt->bind_param('ss', $nickname, $password);

    # SQL lekérdezés végrehajtás
    $stmt->execute();
    $stmt->store_result();

    # csakis 1 db rekordot adott vissza a lekérdezés, akkor mehetünk tovább,
    # mert csakis 1 rekordnyi user nickname-je és password-je egyezhet!
    if ($stmt->num_rows == 1) {

        # ki kell menteni a lekérdezett értékeket
        # paraméterben nyered ki deklarált változókba a lekérdezett értékeket
        $stmt->bind_result($id, $nickname, $email, $password);

        # utána kell fetch-elni !!!
        $stmt->fetch();

        # teszt jelleggel kiíratjuk:
        # echo $id;
        # echo $nickname;
        # echo $email;
        # echo $password;
        # munkamenet-követés
        # SESSION-nek te adsz kulcsnevet ... (user)
        # értéket meg te adod meg szintén ...
        $_SESSION['user'] = $id;
        # innentől kezdve ez globálisan létezik a szerveren ...
        # print_r($_SESSION['user']);

        header('Location: ../main.php');
    }

    $stmt->close();
    $con->close();
}
