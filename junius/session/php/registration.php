<?php

require_once '../config/connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    /*
      var_dump(gettype($username));

      var_dump(strlen($username));
      die();
     * 
     * stlren -> string hossz lekérdezés, C# [].Length (string -> char[])
     * List -> .Count
     * PHP -> tömb -> count()
     * string -> strlen()
     * 
     * gettype() -> egy változó típusát
     */

    if (strlen($username) > 10) {
        die("A felhasználónév nem lehet 10-nél hosszabb!");
    }

    if (strlen($password) > 10) {
        die("A jelszó nem lehet 10-nél hosszabb!");
    }

    // create statment -> SQL-injekciót nem védi ki

    /* $sql = "insert into felhasznalok (felhasznalonev, jelszo) "
      . "values ('$username', '$password');";
      $result = $connection->query($sql);
     */

    // $sql -> string: lekérdezés szövegét tartalmazza
    // string: lekérdezés szövegét tartalmazza -> query string

    $sql = "insert into felhasznalok (felhasznalonev, jelszo) "
            . "values (?, ?);";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();

    if (!$stmt) {
        session_start();
        $_SESSION['reg_error'] = "Nem sikerült a regisztráció!";
        http_response_code(400);
        //header('Location: ../reg.php');
    } else {
        http_response_code(200);
        //header('Location: ../index.php');
    }
}
