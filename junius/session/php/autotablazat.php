<?php

// Táblázatot kigenerálom
// Create Statement lekérdezés

require_once '../config/connect.php';

$sql = "select * from autok;";

$resultObj = $connection->query($sql);

// class-ba megadunk Bootstrap class-ban: "table table-striped"

$html = '<table class="table table-striped">'
        . '<tr>'
        . '<th>Rendszám</th>'
        . '<th>Márka</th>'
        . '<th>Modell</th>'
        . '</tr>';

while ($sor = $resultObj->fetch_assoc()) {
    $html .= '<tr>'
            . "<td>{$sor['rendszam']}</td>"
            . "<td>{$sor['marka']}</td>"
            . "<td>{$sor['modell']}</td>"
            . '</tr>';
}
$html .= '</table>';

echo $html;

$connection->close(); // hálózati kapcsolat erőforrás lezárása
