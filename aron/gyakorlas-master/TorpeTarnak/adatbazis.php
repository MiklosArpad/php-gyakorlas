<?php

$host = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "torpetarna";
$port = "3306";

$connect = new mysqli($host, $dbUser, $dbPwd, $dbName, $port);

if($connect ->errno){
	die("Hiba a csatlakozás során!");
	
}
$connect-> set_charset("utf8");
$sql = "SElECT * FROM torpek";
$result = $connect-> query($sql);
if(!$result){
	 echo ("Hiba a lekérdezés során!");
}else{
	while ($row = $result -> fetch_assoc()){
		//id  nev  klan  nem  suly  magassag
		    echo $row['id'].", ";
			echo $row['nev'].", ";
			echo $row['klan'].", ";
			echo $row['nem'].", ";
			echo $row['suly'].", ";
	}		echo $row['magassag']."<br>";
}
var_dump($result);

$connect -> close();
?>