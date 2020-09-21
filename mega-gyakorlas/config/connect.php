<?php

#1-es feladat: IMPROTÁLT ADATBÁTZISHOZ USERNAME, PASSWORD:
#localhost/phpmyadmin-ban import és adatbázis kiválasztása ott a navigációs sávon Jogok -> 
#username jelszó kismásolása a connect.php alapján (mivel csatlakozzunk fel?) 
#utána: ’Helyi gép’ kiválasztása nagyon fontos !!! 
#(Közben gyakran frissítsük a weblapot eltűnnek-e a hibák 



#2-es feladat: PARAMÉTEREK MEGADÁSA:
#FONTOS A SORREND: szerver címe, adatbázis neve, username, password, port !!!
#Kiszeded külön változókba és azokat adod át a mysqli konstruktornak:


$host = 'localhost';
$user = 'vizsga';
$pwd = 'vizsga';
$dbname = 'gyakorlas';
$port = 3306;

#KAPCSOLAT BEÁLLÍTÁSA:
$con = new mysqli($host, $user, $pwd, $dbname, $port);

#LEHETSÉGES HIBÁK KEZELÉSE:
if ($con->connect_errno) {
    die('Hiba a csatlakozás során');
}

if (!$con->set_charset('utf8')) {
    die('karakterkódolás nem sikerült beállítani');
}
