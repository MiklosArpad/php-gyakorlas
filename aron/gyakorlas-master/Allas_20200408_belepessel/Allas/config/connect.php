<?php

$connect = new mysqli("localhost", "root", "", "esti_allaskozvetito", "3306");
if ($connect -> errno){
    die("Nincs kapcsolat az adatbázissal");
}

if (!$connect ->set_charset("utf8")){
    echo "A karakterkódolás beállítása nem sikerült!";
}
