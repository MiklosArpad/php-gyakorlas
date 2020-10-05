<?php

require_once '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ev'])) {
    $ev = $_POST['ev'];

    $sql = "SELECT * FROM  szemely WHERE ev=?;";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('i', $ev);
    $stmt->execute();
    $stmt->store_result();

    $html = '<table class="table table-striped">'
            . '<tr>'
            . '<th>Név</th>'
            . '<th>Év</th>'
            . '<th>Előző</th>'
            . '<tr>';
    
    $stmt->bind_result($id, $nev, $ev, $elozo);
    
    while ($row = $stmt->fetch()) {
        $html .= "<tr id= '$id'>"
                . "<td>$nev</td>"
                . "<td>$ev</td>"
                . "<td>$elozo</td>"
                . "</tr>";
    }
    $html .= '</table>';
    
    $stmt->close();
    $connect->close();
    
    echo $html;
}
