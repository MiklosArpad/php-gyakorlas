<?php

/*
  echo $_POST['username']; <- HTML attr.: name="username" // pl.: "Bence" (string(5))
  echo $_POST['password'];
 */

// 1) nincs értelme rávizsgálni, hogy a POST['username'] vagy a POST['password']

if (isset($_GET['username']) && isset($_GET['password'])) {
    header('Location: ../index.php');
}

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once '../config/connect.php';
    // megegyezés hogy behúzott erőforrásokat a fájl elejére szokták írni

    $sql = "select id, felhasznalonev from felhasznalok where "
            . "felhasznalonev = ? and jelszo = ?;";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $stmt->store_result();

    // query() metódus ez visszaad egy object (így szokás elnevezni hogy $result):
    // ez lényegében az eredménytábla egy object típusú változóban...
    // $resultObj = $connection->query($sql);
    // $connection->query('select * from felhasznalok;'); <- így is jó
    // fetch_row (számozottan indexelhető), fetch_assoc (asszociatív indexelhető)
    // createStatement -> sima
    // preparedStatement
    // végrehajtottam a query() függvénnyel a lekérdezésemet és a kismacska
    // változó tartalma egy object, ami az eredménytáblát tartalmazza
    // ennek az eredménytáblának mindig egy sor lesz a tartalma

    session_start();
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $felhasznalonev);
        $stmt->fetch();

        $_SESSION['munkamenet'] = $id;
        $_SESSION['username'] = $felhasznalonev;

        $stmt->close();
        $connection->close();

        header('Location: ../autohirdetesek.php');
    } else {
        $stmt->close();
        $connection->close();
        $_SESSION['error'] = "Nincs ilyen felhasználónév vagy jelszó!";
        header('Location: ../index.php');
    }

    /* if ($resultObj->num_rows == 1) {
      // sikeresen loginoltam...
      // munkamenet elindítása
      // munkamenet követésre alkalmas...
      // létrehozok egy session tömböt munkamenet néven
      // rajtam múlik mit állítok be értékül...
      // ez célszerű ha a lekérdezett user id-je a db-ből
      // vagy ha beszédesebbet szeretnénk, akkor a username-je
      // JELSZÓT SOHA !!!
      $rekord = $resultObj->fetch_row();
      $_SESSION['munkamenet'] = $rekord[0]; // 0. oszlop -> ID (adatbázis)
      $_SESSION['username'] = $rekord[1];
      header('Location: ../autohirdetesek.php');
      } else {
      $_SESSION['error'] = "Nincs ilyen felhasználónév vagy jelszó!";
      header('Location: ../index.php');
      } */

// ha nincs akkor állítson be hibaüzenet a főoldalra (nem sikerült a login)
}
