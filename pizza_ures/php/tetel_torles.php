<?php

session_start();

$kosar = $_SESSION['kosar'];

$torlendoTetelId = $_POST['id'];

echo 'EZT KELL MAJD KITÖRÖLJEM: ' . $torlendoTetelId;
