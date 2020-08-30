<?php

require_once '../config/connect.php';

$sql = 'SELECT DISTINCT marka FROM autok;';
$resultObj = $connection->query($sql);

$html = "<select class='form-control' id='automarkak'>"
        . "<option>Kérjük válasszon...</option>";

while ($sor = $resultObj->fetch_assoc()) {
    $html .= "<option>{$sor['marka']}</option>";
}

$html .= '</select>';

echo $html;
