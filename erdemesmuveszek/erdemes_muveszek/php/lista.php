<?php

require_once '../config/connect.php';

if (isset($_POST['evszam'])) {
    $evszam = $_POST['evszam'];
    $sql = "SELECT * FROM szemely WHERE ev = $evszam";

    $res = $link->query($sql);

    $html = '<table>'
            . '<tr>'
            . '<th>Díjazott</th>'
            . '<th>Évszám</th>'
            . '<th>Díj</th>'
            . '</tr>';

    while ($row = $res->fetch_row()) {
        $html .= "<tr id='$row[0]'>"
                . '<td>' . $row[1] . '</td>'
                . '<td>' . $row[2] . '</td>'
                . '<td>' . $row[3] . '</td>'
                . '</tr>';
    }

    $html .= '</table>';

    echo $html;
}
