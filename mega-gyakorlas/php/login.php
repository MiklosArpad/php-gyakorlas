<?php

require_once '../config/init.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $nickname = $_POST['nickname'];
    $password = $_POST['pwd'];


    echo $nickname;
    echo $password;
}
