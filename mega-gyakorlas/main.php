<?php

require_once 'config/init.php';
if (!isset($_SESSION['user']))
    header('Location: index.php');

require_once './html/head.html';
require_once './config/functions.php';
printNavbar();
require_once './html/user-table.html';
require_once './html/footer.html';
