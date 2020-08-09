<?php

session_start();

$modositandoTetelId = $_POST['id']; // ezt az id-jű ételt kell a kosárban módosítunk...
$darabszam = $_POST['darab'];
//
// kulcs - érték páros tömb
$kosar = $_SESSION['kosar']; // SEGÉDVÁLTOZÓ

$kosar[$modositandoTetelId] = $darabszam;
//unset($kosar[$torlendoTetelId]); // adott termék törlése kulcs alapján a segéváltozóból

$_SESSION['kosar'] = $kosar; // az eredeti sessionnek értékül adjuk a módosított segédváltozót (ő az akiben módosítottunk!!!)
