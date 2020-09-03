<?php

$host = 'localhost';
$user = 'vizsga';
$pwd = 'vizsga';
$dbname = 'gyakorlas';
$port = 3306;

$con = new mysqli($host, $user, $pwd, $dbname, $port);
if ($con->connect_errno) {
    die('Hiba a csatlakozás során');
}

if (!$con->set_charset('utf8')) {
    die('karakterkódolás nem sikerült beállítani');
}
