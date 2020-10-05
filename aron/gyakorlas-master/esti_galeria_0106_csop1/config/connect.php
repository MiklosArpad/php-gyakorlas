<?php

$host = 'localhost';
$username = 'root1';
$password = 'root1';
$database = 'esti_galeria';
$port = 3306;

$con = new mysqli($host, $username, $password, $database, $port);

if ($con -> errno){
    die('Nem sikerült csatlakozi az adatbázishoz!');
}
if (!$con ->set_charset('utf8')){
    echo 'A karakterkódolás beállísa sikertelen!';
}
