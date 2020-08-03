<?php

$username = $_POST['username'];
$password = $_POST['password'];

require_once '../config/connect.php';

// create statement
// $sql = "select * from vevok where felhasznalonev = '$username' and jelszo = '$password';";
// paraméterezett lekérdezést
// prepared statement
$sql = "select id from vevo where felhasznalonev = ? and jelszo = ?;";


$stmt = $conn->prepare($sql);

$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$stmt->store_result();

session_start();

if ($stmt->num_rows == 1) {
    $stmt->bind_result($id);
    $stmt->fetch();
    $_SESSION['user_id'] = $id;
    
    if (isset($_SESSION['error'])) {
        unset($_SESSION['error']);
    }
} else {
    $_SESSION['error'] = "Helytelen felhaszálónév vagy jelszó!";
    
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
    }
}

$stmt->close();
$conn->close();

header('Location: ../index.php');
