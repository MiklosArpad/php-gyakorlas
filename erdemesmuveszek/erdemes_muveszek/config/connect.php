<?php

$server = '127.0.0.1';
$user = 'miki';
$db = 'erdemes_muveszek';
$pwd = 'miki113';
$port = '3306';

$link = new mysqli($server, $user, $pwd, $db, $port);

if ($link->connect_errno) {
    die("Nem csatlakozott az adatbázishoz!");
}

if (!$link->set_charset('utf8')) {
    die("karakterkódolási hiba");
}
