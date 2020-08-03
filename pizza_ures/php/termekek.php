<?php

require_once '../config/connect.php';

// create statement

$sql = "SELECT id, nev, leiras, ar FROM termekek;";
$result = $conn->query($sql);

$htmlTablazat = "<table class='table table-striped'>"
        . "<thead>"
        . "<tr>"
        . "<th>Ssz.</th>"
        . "<th>Név</th>"
        . "<th>Leírás</th>"
        . "<th>Ár</th>"
        . "<th>Rendel</th>"
        . "</thead>"
        . "</tr>"
        . "<tbody>";

while ($sor = $result->fetch_row()) {
    $htmlTablazat .= "<tr>"
            . "<td>{$sor[0]}</td>"
            . "<td>{$sor[1]}</td>"
            . "<td>{$sor[2]}</td>"
            . "<td>{$sor[3]}</td>"
            . "<td><button data-kajaid='{$sor[0]}' class='btn btn-success hozzaad'>&#127869;</button></td>"
            . "</tr>";
}

$htmlTablazat .= "</tbody></table>";

$conn->close();

echo $htmlTablazat;
