<?php

require_once '../config/connect.php';

$sql = 'SELECT DISTINCT ev FROM szemely ORDER BY ev ASC';
$res = $link->query($sql);
$html = '<select><option>Válassz évszámot</option>';


while ($row = $res->fetch_row()) {
    $html .= "<option>{$row[0]}</option>";
}


/* while ($row = $res->fetch_assoc()) {
  $html .= "<option>{$row['ev']}</option>";
  } */


$html .= '</select>';
echo $html;
