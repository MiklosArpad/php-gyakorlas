<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($_POST['id']) && (isset($_POST['value'])))) {
    
    $id = $_POST['id'];
    $value = $_POST['value'];
    if ($value == 0) {
	if (isset($_SESSION['cart'][$id])) {
	    unset($_SESSION['cart'][$id]);
	    if (empty($_SESSION['cart'])){
		unset($_SESSION['cart']);
	    }
	}
    } else {
	if (isset($_SESSION['cart'][$id])) {
	    //ez a termék már megtalálható a kosárban
	    $_SESSION['cart'][$id] = $value;
	}
    }
} else{
    http_response_code(501);
}