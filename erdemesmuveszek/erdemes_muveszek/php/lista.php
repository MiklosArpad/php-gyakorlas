<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $evszam = $_POST['ev'];
    echo $evszam;
    
}