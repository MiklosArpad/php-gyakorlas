<?php

require_once '../config/connect.php';

$html = '<table class="table table-striped text-center">'
        . '<tr>'
        . '<th>Nickname</th>'
        . '<th>E-mail cím</th>'
        . '<th></th>'
        . '</tr>';

// Create statement SQL lekérdezés
$sql = 'SELECT Id, Nickname, Email FROM felhasznalok;';
$res = $con->query($sql);

if (!$res) {
    http_response_code(400);
}

while ($row = $res->fetch_row()) {
    $html .= "<tr data-userid='{$row[0]}'>"
            . "<td>{$row[1]}</td>"
            . "<td>{$row[2]}</td>"
            . "<td><button class='js-modositas btn btn-info'>Módosítás</button>"
            . "<button class='js-torles btn btn-danger'>Törlés</button></td>"
            . '</tr>';
}

$html .= '</table>';

echo $html;
