<?php
session_start();
require_once '../config/connect.php';

if (!isset($_SESSION['kosar'])) {
    echo "<h1 class='text-center'>Üres a kosár!</h1>";
} else {
    $kosar = $_SESSION['kosar'];

    $sql = "SELECT * FROM termekek WHERE id = ?";
    $stmt = $conn->prepare($sql);

    $html = "<table id='kosar-tabla' class='text-center table table-striped'>"
            . "<tr>"
            . "<th>Név</th>"
            . "<th>Mennyiség</th>"
            . "<th>Ár</th>"
            . "<th></th>"
            . "<th></th>"
            . "</tr>";
    while (current($kosar)) {
        $key = key($kosar);
        //var_dump($key);
        $stmt->bind_param("i", $key);
        $stmt->execute();
        $stmt->bind_result($id, $nev, $leiras, $ar, $kid);
        $stmt->fetch();
        $html .= "<tr>"
                . "<td>{$nev}</td>"
                . "<td><input class='form-control tetel-darabszam' id='{$id}' type='number' min='0' max='40' value='{$kosar[$key]}'></td>"
                . "<td>{$ar}</td>"
                . "<td><button class='btn btn-success kaja-modositas' data-modositando='{$id}'>&#128190</button></td>"
                . "<td><button class='btn btn-danger kaja-torles' data-torlendo='{$id}'>&#128465</button></td>"
                . "</tr>";
        next($kosar);
    }
    $html .= "</table>";

    $html .= "<button class='rendel btn btn-success mt-3'>Rendelés</button>";
    $html .= "<button class='kosar-urites btn btn-danger mt-3'>Ürítés</button>";
    echo $html;
    $stmt->close();
    $conn->close();
}
