<?php
    session_start();
    require('config/functions.php');
    require_once('config/connect.php');
    
    htmlKiir('html/header.html');
    
    
    if (!isset($_SESSION['felhasznalo'])){
        //Senki nincs bejelentkezve
        htmlKiir('html/menu.html');
    } else {
        if ($_SESSION['diak'] == 1){
            //ha diák jelentkezett be
            htmlKiir('html/menu_diak.html');
        } else {
            //ha adminisztrátor jelentkezett be
            htmlKiir('html/menu_admin.html');
        }
    }
    
    htmlKiir('html/footer.html');
    
        
        
    