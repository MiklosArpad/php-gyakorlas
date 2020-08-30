<?php
session_start();
require_once('../config/connect.php');

if (!empty($_POST['username']) && (!empty($_POST['password']))) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM kapcsolatok WHERE email = '$username' AND jelszo = '$password'";
    $res = $connect -> query($sql);
    if (!$res) {
	$_SESSION['error'] = '<p class="text-danger">Hiba a lekérdezésben!</p>';
	//header("Location: ../index.php");
    }
    if ($res -> num_rows != 1) {
	$_SESSION['error'] = '<p class="text-danger">Helytelen felhasználónév vagy jelszó!</p>';
    } else {
	$row = $res->fetch_array();
	$_SESSION['user'] = $row[0]; //felhasználó id-je kerül eltárolásra
    }
}
$connect->close();
header("Location: ../index.php");


