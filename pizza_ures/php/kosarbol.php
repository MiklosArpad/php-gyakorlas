<?php
session_start();
require_once '../config/connect.php';

if (!isset($_SESSION['kosar'])){
    echo "Üres a kosár!";
} else {
    $kosar = $_SESSION['kosar'];
    
    $sql = "SELECT * FROM termekek WHERE id = ?";
    $stmt = $conn -> prepare($sql);
    
    $html = "<table>"
            . "<tr>"
            . "<th>Név</th>"
            . "<th>Mennyiség</th>"
            . "<th>Ár</th>"
            . "</tr>";
    while (current($kosar)){
        $key = key($kosar);
       //var_dump($key);
        $stmt -> bind_param("i", $key);
        $stmt -> execute();
        $stmt -> bind_result($id, $nev, $leiras, $ar, $kid);
        $stmt -> fetch();
        $html .="<tr>"
            . "<td>{$nev}</td>"
            . "<td><input id='{$id}' type='number' min='0' max='40' value='{$kosar[$key]}'></td>"
            . "<td>{$ar}</td>"
            . "</tr>";
        next($kosar);
            
    }
    $html .= "</table>";
    
    $html .= "<button class='modosit btn btn-info'>Módosít</button>";
    $html .= "<button class='rendel btn btn-success'>Rendelés</button>";
    echo $html;
    $stmt -> close();
    $conn -> close();
    
}


