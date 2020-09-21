<?php

require_once 'init.php';

function isLoggedIn() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

function printNavbar() {
    if (isLoggedIn()) {
        echo file_get_contents('html/navbar_in.html');
    } else {
        echo file_get_contents('html/navbar_out.html');
    }
}
