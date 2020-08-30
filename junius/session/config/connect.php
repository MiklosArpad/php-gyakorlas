<?php

// 127.0.0.1 vagy localhost az ugyanaz!

$connection = new mysqli('127.0.0.1', 'root', '', 'autohirdetes', '3306');

$vanHiba = $connection->errno;

if ($vanHiba) {
    die("Hiba a Mátrixban..."); // ne fusson tovább, megszakítja a script futást + üzenet
}

$connection->set_charset('utf-8');
