<?php
session_start();
require_once('../config/connect.php');
require_once('../config/functions.php');

if (!isLogged()){
    // Jelentkezzen be!
    $_SESSION['error'] = "A rendelés feladáshoz jelentkezzen be!";
    header("Location: ../login.php");
}
$user = $_SESSION['user']; // kétdimenziós egy tömb (nem asszoc.)
if (empty($_SESSION['cart'])){
    //Üres a kosár!
    $_SESSION['error'] = "A rendelés feladáshoz legalább 1 terméket tegyen a kosárba!";
    header("Location: ../products.php");
}
$cart = $_SESSION['cart'];
if (empty($_POST['pay'])){
    $_SESSION['error'] = "A fizetési mód nem volt kiválasztva!";
    //$_SESSION['error'] = $_POST['pay'];
    header("Location: ../cart.php");
}

$pay = $_POST['pay'];
$con -> autocommit(FALSE);
//1. Lépés: 1 új rekord beszúrása a megrendelés táblába
//2. Lépés: keletkezik egy megrendelés id, ezt ki kell olvasnom
//3. Lépés: megrendelés id-vel tételeket rögzítem a tetelek táblában, annyiszor, ahány termék szerepel a kosárban
// 4. Lépés: $con->commit();
// Ha bárhol hiba történik, akkor $con->rollback();

$sql = "INSERT INTO megrendeles (vasarlo_id, fizetesi_mod) VALUES ($user[0],'$pay')";
$con -> query($sql);
$orderId = null;
if (!($orderID = $con -> insert_id)){
    $con ->rollback();
    $_SESSION['error'] = "A megrendelést nem sikerült rögzíteni!";
    
}
//termek_id, mennyiseg, ar, megrendeles_id
$sql = "INSERT INTO tetelek (termek_id, mennyiseg, ar, megrendeles_id) VALUES (?,?,?,?)";
$stmt = $con -> prepare($sql);
if (!$stmt){
    $stmt -> close();
    $con -> close();
    $_SESSION['error'] = "Adatbázis hiba!";
    header("Location: ../cart.php");
}
//kosár bejárása
// alternatív mód a kulcsok megszerzésére array_keys()
foreach ($cart as $id => $value) {
    $res = $con -> query("SELECT ar FROM products WHERE id = $id");
    if (!$res){
	//hiba
    }
    $row = $res -> fetch_array();
    $price = $row[0];
    $stmt -> bind_param('iiii', $id, $value, $price, $orderID);
    $stmt -> execute();
    if ($stmt -> errno == 0){
	$con -> commit();
    } else{
	$con -> rollback();
    }
}


$con -> close();