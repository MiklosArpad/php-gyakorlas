<?php

require_once '../config/connect.php';

$sql = "SELECT * FROM szemely;";
$res = $connect->query($sql);

if (!$res) {
    die('Hiba a lekérdezésben!');
}

$html = '<table class="table table-striped">'
        . '<tr>'
        . '<th>Név</th>'
        . '<th>Év</th>'
        . '<th>Előző</th>'
        . '</tr>';

while ($row = $res->fetch_row()) {
    $html .= "<tr id='$row[0]'>"
            . "<td>$row[1]</td>"
            . "<td>$row[2]</td>"
            . "<td>$row[3]</td>"
            . "</tr>";
}


$html .= '</table>';
echo $html;