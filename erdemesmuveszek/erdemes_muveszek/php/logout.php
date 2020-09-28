<?php

session_start();
session_destroy();
header('Location: ../index.php');
# szerverválasz... ajaxnál nem irányít el csak szinkron hívásnál ...