<?php

$host = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "torpetarna";
$port = "3306";

$connect = new mysqli($host, $dbUser, $dbPwd, $dbName, $port);

if ($connect->errno) {
    die("Hiba a csatlakozás során!");
}

$connect->set_charset("utf8");
