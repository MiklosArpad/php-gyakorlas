<?php

require_once '../config/connect.php';

if (isset($_POST['evszam'])) {
    $evszam = $_POST['evszam'];

    $sql = "SELECT * FROM szemely WHERE ev = ?"; // 1) sql lekérdezés ?-el
    $stmt = $link->prepare($sql); // 2) a query string ($sql) linken keresztüli előkészítése és a statemtn változóba mentése
    $stmt->bind_param('i', $evszam); // 3) a ?-es helyek összekötése a változóval -> amit paraméterül adok
    $stmt->execute(); // 4) az sql végrehajtása
    $stmt->store_result(); //5) eredmény letárolása a statement-be

    $html = '<table>'
            . '<tr>'
            . '<th>Díjazott</th>'
            . '<th>Évszám</th>'
            . '<th>Díj</th>'
            . '</tr>';

    $stmt->bind_result($id, $nev, $ev, $elozo); // 5) az oszlopok kimentése változókba

    while ($row = $stmt->fetch()) { // 6) az eredménytábla boncolása
        $html .= "<tr id='$id'>"
                . '<td>' . $nev . '</td>'
                . '<td>' . $ev . '</td>'
                . '<td>' . $elozo . '</td>'
                . '</tr>';
    }

    $html .= '</table>';

    $stmt->close(); // 7) statement lezárása

    $link->close();

    echo $html;
}
