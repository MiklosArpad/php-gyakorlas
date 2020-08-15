<?php

require_once '../config/connect.php';
$sql = "select * from munkaado";

$res = $link->query($sql);
//$res = $link->query("select * from munkaadok");

if (!$res) {
    die("Hiba a kapcsolatban");
}
$html = "<table>"
        . "<tr>"
        . "<th>Név</th>"
        . "<th>Település</th>"
        . "</tr>";
while ($row = $res->fetch_row()) {
    $html .= "<tr id='{$row[0]}'>"
            . "<td>{$row[1]}</td>"
            . "<td>{$row[2]}</td>"
            . "</tr>";
}
$html .= "</table>";  //.=nagyon fontos, mert egyébként elfelejti az előző sorokat
$link->close();
echo $html;
