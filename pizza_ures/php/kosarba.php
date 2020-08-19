<?php
session_start();

if (!isset($_SESSION['kosar'])){
    $_SESSION['kosar'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && (isset($_POST['id']))){
    $id = $_POST['id'];
    $kosar = $_SESSION['kosar'];
    if (array_key_exists($id, $kosar)){
        $_SESSION['kosar'][$id] ++;
    } else {
        $_SESSION['kosar'][$id] = 1;
    }
}
//var_dump($_SESSION);