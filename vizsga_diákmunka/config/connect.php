<?php

$host = "localhost";
$user = "diakmunka";
$pwd = "diakmunka";
$db = "diakmunka";
$port = 3306;

$link = new mysqli($host, $user, $pwd, $db, $port);

if ($link->connect_errno) {
    die("Hiba az Ön készülékében van!");
}

if (!$link->set_charset("utf8")) {
    die("karakteródolási hiba");
}
