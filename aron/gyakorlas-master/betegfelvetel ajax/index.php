<?php
    session_start(); //munkamenet követése miatt
    
    require_once('config/connect.php'); //adatbázishoz csatlakozunk
    echo file_get_contents("html/header.html");
    
    require_once 'set_nav.php';
    
    $connect -> close();
    echo file_get_contents("html/footer.html");