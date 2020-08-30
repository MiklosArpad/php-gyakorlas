<?php

$host = 'localhost';
$username = 'esti_shop_user';
$password = 'esti_shop_user';
$database = 'esti_shop';
$port = 3306;

$con = new mysqli($host, $username, $password, $database, $port);

if ($con->errno) {
    die("Hiba a kapcsolat létrehozásakor!");
}
if (!$con->set_charset("utf8")) {
    echo "Nem sikerült beállítani a karakterkódolást!";
}
