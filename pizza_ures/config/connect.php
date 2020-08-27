<?php

$conn = new mysqli('127.0.0.1', 'root', '', 'etterem');

if ($conn->connect_errno) {
    die($conn->connect_error);
}

if (!$conn->set_charset('utf8')) {
    die('Nem sikerült as karakterkódolást beállítani!');
}
