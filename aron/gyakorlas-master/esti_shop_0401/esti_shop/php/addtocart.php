<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($_POST['id']))) {
    //van ajax kérés
    if (!isset($_SESSION['cart'])) {
        //üres a kosár
       $_SESSION['cart'] = array(); 
    }
    
    $id = $_POST['id'];
    if (isset($_SESSION['cart'][$id])) {
       //ez a termék már megtalálható a kosárban
        $_SESSION['cart'][$id] += 1;
    } else {
        //ez a termék még nincs a kosárban
        $_SESSION['cart'][$id] =  1;
    }
}
