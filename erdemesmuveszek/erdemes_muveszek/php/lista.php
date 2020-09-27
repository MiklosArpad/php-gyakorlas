<?php

require_once '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $evszam = $_POST['ev'];
    # echo $evszam;

    $sql = "SELECT az, nev, elozo FROM `szemely` WHERE ev = ?;";
    $stmt = $link->prepare($sql);
    $stmt->bind_param('i', $evszam);
    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($az, $nev, $elozo);

    $tablazat = '<table class="table table-hover">'
            . '<tr>'
            . '<th>Név</th>'
            . '<th>Előző</th>'
            . '</tr>';

    while ($stmt->fetch()) {
        $tablazat .= "<tr data-szineszid='{$az}'>"
                . "<td>$nev</td>"
                . "<td>$elozo</td>"
                . "</tr>";
    }

    $tablazat .= '</table>';
    echo $tablazat;
}
