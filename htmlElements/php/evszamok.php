<?php

require_once '../config/connect.php';

$sql = "SELECT DISTINCT ev FROM szemely ORDER BY ev;";
$res = $connect->query($sql);

if (!$res) {
    die("Hiba a lekérdezésben!");
}

$html = "<select class='form-control evszamok'>";

while ($row = $res->fetch_row()) {
    $html .= "<option>$row[0]</option>";
}

$html .= "</select>";

echo $html;
