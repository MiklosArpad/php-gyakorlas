<?php

require_once 'connect.php';

$sql = "SElECT * FROM torpek";

$result = $connect->query($sql); // object típusú -> eredménytáblát ad vissza

/*
  var_dump($result); // információkat ad vissza az eredménytábla objektumról ...
  die();
 */

if (!$result) {
    echo ("Hiba a lekérdezés során!");
} else {

    // minden ciklusfutás során deklaráljuk a while ciklus fejébe a $row változót,
    // amely minden futás kezdéskor megkapja a következő darab rekord
    // következő rekordok értékét amit ledarabol a $result változó
    // amelyet darabolva 
    // fetch_row() -> $row[0]
    // fetch_assoc() -> $row['id']
    // Asszociatív indexelés...

    $tablazat = "<table class='table table-hover text-center'>"
            . "<tr>"
            . "<th>ID</th>"
            . "<th>Név</th>"
            . "<th>Klán</th>"
            . "<th>Nem</th>"
            . "<th>Súly</th>"
            . "<th>Magasság</th>"
            . "</tr>";

    while ($row = $result->fetch_assoc()) { // 49 sor lett lekérdezve, 49x fut le a while ciklus
        $tablazat .= "<tr>"
                . "<td>{$row['id']}</td>"
                . "<td>{$row['nev']}</td>"
                . "<td>{$row['klan']}</td>"
                . "<td>{$row['nem']}</td>"
                . "<td>{$row['suly']}</td>"
                . "<td>{$row['magassag']}</td>"
                . "</tr>";
    }

    // while ciklus végén a $tablazat változó értéke: nagyon hosszú string
    // értéke: table nyitó tag, a fejlécek egy sorban + 49 db sor a while loop generált
    
    $tablazat .= "</table>";
    echo $tablazat; // kiíratom a hosszú string tartalmát (HTML formátum)
    /*
      // Sorszámozott indexelés
      while ($row = $result->fetch_row()) { // 49 sor lett lekérdezve, 49x fut le a while ciklus
      //id  nev  klan  nem  suly  magassag
      echo $row[0] . ", ";
      echo $row[1] . ", ";
      echo $row[2] . ", ";
      echo $row[3] . ", ";
      echo $row[4] . ", ";
      echo $row[5] . "<br>";
      } */
}

// var_dump($result);

$connect->close();

// php állományban ha nincs HTML (nem abban írunk php kódot,
// nem kötelező a php záró tag -> ? >