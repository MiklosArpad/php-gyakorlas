<?php

// GET, POST HTTP művelet (hálózati kommunikáció -> opcionális mindkettő jó küldés és fogadásra)


// ha HTML oldalon a formon method-nak POST van beállítva, akkor
// szerveroldalon a $_POST['kulcs']-al fogom elérni az adatot !!!
// method get -> $_GET['firstname'] -> HTML name attr. értékét (pl. <input name="firstname">)
// Ha rá akarsz vizsgálkni hogy post vagy get-el jön, akkor $_SERVER['REQUEST_METHOD']

/*
  if (!($_SERVER['REQUEST_METHOD'] == "POST")) { // Ha nem POST-tal hanem GET-el a HTML-ből az adat
  die("Előbb az űlapot töltsd ki!");
  } */

// isset() -> létezésre vizsgál rá: pl. üresen küldöm be, akkor 
// empty() -> létezik-e az adott HTML name-el létrejhött POST/GET + rávizsgál hogy tartalom van-e benne
// 
// SZUPERGLOBÁLOK: Kulcs-érték páros tömbök

var_dump($_POST);


if (isset($_POST['firstname']) && isset($_POST['age'])) {
    echo "LÉTEZIK";
} else {
    echo "NEM LÉTEZIK";
}

echo "<br>";

if (empty($_POST['firstname']) && empty($_POST['age'])) {
    echo "ÜRES TARTALOM";
} else {
    echo "NEM ÜRES TARTALOM";
}





echo "Keresztneved: " . $_POST['firstname'] . "<br>";
echo $_POST['age'] . " éves vagy" . "<br>";


