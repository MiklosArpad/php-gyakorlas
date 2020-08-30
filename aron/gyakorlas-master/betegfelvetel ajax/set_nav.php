<?php

if (isset($_SESSION['user']) && (!empty($_SESSION['user']))) {
    //Valaki be van jelentkezve
    echo file_get_contents("html/menu_in.html");
    echo "<h2 class='text-center text-light'>Köszöntjük kedves " . $_SESSION['user'][1] . "!</h2>";
} else {
    //senki nincs bejelentkezve
    echo file_get_contents("html/menu_out.html");
}
