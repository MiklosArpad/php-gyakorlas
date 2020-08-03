<?php

echo file_get_contents("html/header.html");
echo file_get_contents("html/menu.html");

session_start();

if (isset($_SESSION['user_id'])) {
    echo $_SESSION['user_id'];
}

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
}

echo file_get_contents("html/footer.html");
