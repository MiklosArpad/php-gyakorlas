<?php

session_start();

if (isset($_SESSION['kosar'])) {
    unset($_SESSION['kosar']);
}
