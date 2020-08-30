<?php

$host ="localhost";
$dbUser ="root";
$dbPwd ="";
$dbName = "betegfelvetel";
$port = "3306";

$connect = new mysqli($host, $dbUser, $dbPwd, $dbName, $port);
//var_dump($connect);

if($connect -> errno){
    die("Nem sikerült az adatbázishoz való csatlakozás!");   
}
 if(!$connect ->set_charset("utf8")){      
     echo ("Nem sikerült beállítani a karakterkódolást!");     
 }





