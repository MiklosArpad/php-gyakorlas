<?php
$host = "localhost";

$connect = new mysqli($host,"root","","orszagok","3306");

if ($connect -> errno){
    die("Nem sikerült csatlakozni az adatbázishoz!");
}

if (!$connect -> set_charset("utf8")){
    echo "Nem sikerült beállítani a karakterkódolást!";
}