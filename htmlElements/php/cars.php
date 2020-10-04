<?php

require_once '../config/connect.php';

$sql = "SELECT * FROM marka ORDER BY nev;";
$res = $connect->query($sql);

if (!$res) {
    die("Hiba a lekérdezésben!");
}

$html = "<select class='form-control'>";

while ($row = $res->fetch_row()) {
    $html .= "<option value='$row[0]'>$row[1]</option>";
}

$html .= "</select>";

echo $html;
