<?php

$conn = new mysqli('127.0.0.1:3306', 'root', '', 'etterem');

if ($conn -> connect_errno){
    die($conn -> connect_error);
}

$conn ->set_charset('utf8');
