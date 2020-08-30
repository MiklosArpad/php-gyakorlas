<?php

require_once '../config/connect.php';


// felküldte az AJAX kérés
if (!empty($_POST['kismacska'])) {

    $marka = $_POST['kismacska'];

    /* create statement
      $sql = "select * from autok where marka = '$marka';";
     * $resultObj = $connection->query($sql);
     * while ($sor = $stmt->fetch_assoc()) {
      $html .= '<tr>'
      . "<td>{$sor['rendszam']}</td>"
      . "<td>{$sor['marka']}</td>"
      . "<td>{$sor['modell']}</td>"
      . '</tr>';
      }
     */

    // prepared statement
    $sql = "select * from autok where marka = ?;";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('s', $marka);
    $stmt->execute();

    // selectnél + 1 lépés
    $stmt->store_result(); // végeredmény tábla lementése
    $stmt->bind_result($rendszamResult, $markaResult, $modellResult);
    // Végeredmény kimentése változókba
    // HTML output kigenerálása
    $html = '<table class="table table-striped">'
            . '<tr>'
            . '<th>Rendszám</th>'
            . '<th>Márka</th>'
            . '<th>Modell</th>'
            . '</tr>';

    while ($stmt->fetch()) {
        $html .= '<tr>'
                . "<td>$rendszamResult</td>"
                . "<td>$markaResult</td>"
                . "<td>$modellResult</td>"
                . '</tr>';
    }
    $html .= '</table>';

    echo $html;

    // Erőforrások lezárása (hálózati-forgalom is egy erőforrás)
    $stmt->close();
    $connection->close();
}
