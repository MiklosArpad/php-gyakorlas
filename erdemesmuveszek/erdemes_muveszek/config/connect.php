<?php

$server = '127.0.0.1';
$eser = 'exam';
$db = 'erdemes_muveszek';
$pwd = 'exam';
$port = 3306;

$link = new mysqli($server, $eser, $pwd, $db, $port);

if($link->connect_errno) {
    die('Nem csatlakozik az adatbázishoz');
}
if(!$link->set_charset('utf8')) {
    die('Karakterkódoláai hiba');
}
