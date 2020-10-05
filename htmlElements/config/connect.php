<?php

$server = 'localhost';
$user = 'root';
$db = 'erdemes_muveszek';
$pwd = '';
$port = 3306;

$connect = new mysqli($server, $user, $pwd, $db, $port);

if ($connect->connect_errno) {
    die("Nem sikerült csatlakozni");
}
if (!$connect->set_charset('utf8')) {
    die("Rossz a karakterkódolás");
}
