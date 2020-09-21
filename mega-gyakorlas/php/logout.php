<?php

require_once '../config/init.php';
session_destroy(); # ez mindent session-t megszüntet
# unset($_SESSION['user']); # ha csak egy specifikus session-t akarok kidobni, akkor unset()
header('Location: ../index.php');
