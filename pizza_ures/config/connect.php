<?php

$conn = new mysqli('10.0.14.100', 'user_esti', '', 'esti_etterem');

if ($conn -> connect_errno){
    die($conn -> connect_error);
}

$conn ->set_charset('utf8');
