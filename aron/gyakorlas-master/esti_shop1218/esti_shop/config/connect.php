<?php
$con = new mysqli("localhost","esti_shop_user","esti_shop_user","esti_shop","3306");
if ($con -> errno){
    die("Hiba a kapcsolat létrehozásakor!");
}
if (!$con -> set_charset("utf8")){
    echo "Nem sikerült beállítani a karakterkódolást!";
}
