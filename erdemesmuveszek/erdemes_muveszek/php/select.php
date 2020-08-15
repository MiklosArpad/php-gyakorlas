<?php

require_once '../config/connect.php';
$sql = "select distinct ev from szemely order by ev";

$res = $link->query($sql);

$html = '<select><option>Kérjük válasszon!</option>';

while ($row = $res->fetch_assoc()) {
    $html .= "<option>{$row['ev']}</option>";
}

$html .= '</select>';

echo $html;
