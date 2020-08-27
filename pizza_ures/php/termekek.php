<?php

require_once '../config/connect.php';

$sql = "SELECT id, nev, leiras, ar FROM termekek";
$res = $conn->query($sql);

if (!$res) {
    die('Nem töltött be az étlap');
}
$html = "<table class='table table-striped'>"
        . "<tr>"
        . "<th>Ssz</th>"
        . "<th>Név</th>"
        . "<th>Leírás</th>"
        . "<th>Ár</th>"
        . "<th>Rendel</th>"
        . "</tr>";

while ($row = $res->fetch_assoc()) {
    $html .= "<tr>"
            . "<td>{$row['id']}</td>"
            . "<td>{$row['nev']}</td>"
            . "<td>{$row['leiras']}</td>"
            . "<td>{$row['ar']}</td>"
            . "<td><button data-kajaid='{$row['id']}' class='hozzaadas btn btn-success'>&#127869;</button></td>"
            . "</tr>";
}


$html .= '</table>';


$conn->close();
echo $html;
