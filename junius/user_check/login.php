<?php

// Többdimenziós tömb: indexein tömbök vannak.
// $users[0] -> felhasználónevek tömbje tartózkodik

$users = array(
    //0. index -> username tömb
    array('Peter', 'Robert', '      ', '', 'vasvari'),
    // 1. index -> jelszó tömb
    array('jelszo', 'Balint', '      ', '', 'iskola')
);


// Többbdimenziós tömb indexelése:

// "iskola" -> $users[1][4];
// "Robert" -> $users[0][1];


// $_POST -> tartalmazza: $_POST['user'], $_POST['pwd']
// $_POST akkor üres ha nem POST szupoerglobállal jön szerveroldalra a 'user' meg a 'pwd'
// ($_POST akkor üres, ha nincs benne egyáltalán $_POST['user'] vagy a $_POST['pwd'])
// 
// $_POST akkor nem üres, ha jön """"legalább"""" $_POST['user'] vagy $_POST['pwd']
// (""""legalább"""" -> nincs olyan hogy vagy ez vagy az a post tömb jön, mert egy űrlapban
// van a user és a pwd kulcs, tehát Submuit gombra kattintás után automata megy szerverre mindkettő



/* var_dump($_POST);
  var_dump($_GET);
  die(); */

echo "<br>";

if (empty($_POST)) { // volt-e POST HTTP művelete (hálózati forgalom)
    header("Location: index.php"); // szerveroldali webpage átirányítás
}

/*
  if (empty($_POST['user'] && empty($_POST['pwd']))) { // A két post tömbben van-e valami egyáltalán?
  echo 'Üres adat';
  die();
  }
 */



// Itt már POSTolva megérkezett a user meg a pwd


if (isset($_POST['user'])) { // rávizsgál hogy létrejött-e user POST tömb
    $user = $_POST['user']; // kimenti változóba a user post tömb értékét (input értéke)
//    var_dump($user);

    $pwd = $_POST['pwd']; // lementi változba a post tömb értékét
    // var_dump($pwd);
    // Ha a felhasználónév VAGY a jelszó 5-nél rövidebb, 
    // akkor elszáll a szkript (die() függvény leállítja a 
    // szekvenciális végrehajtást és kiír egy üzenetet.

    var_dump($user);
    var_dump($pwd);
    
    if (strlen($user) < 5 || strlen($pwd) < 5) {
        die("Rövid");
    }

    // Hogyan állapítja meg a felhasználónév vagy jelszó
    // az tényleg egy létező vagy nem létező !!!
    // array_search -> tömbben kereső függvény
    // tű: $user -> "Bence" ténylegesen a felhasználónév, amit az inputba írok a HTML oldalon
    // szénakazal: $users tömb nulladik indexe: 
    $place = array_search($user, $users[0]);
// Ha megtalálja a "Bence"-t a tömb 0. indexén lévő username tömbben,
    // akkor visszaadja a kulcsot: belső tömb INDEX (helye)
// De ha nem találja meg, akkor FALSE-ot ad vissza

    var_dump($place);
    
    
    if ($users[0][$place] == $user && $users[1][$place] == $pwd) {
        echo "<h1>Sikeresen beléptél!</h1>";
    } else {
        echo "<h1>Helytelen belépési adatok!</h1>";
    }
}
