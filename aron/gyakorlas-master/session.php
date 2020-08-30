<?php
    session_start();
    var_dump($_SESSION);
    if($_SERVER['REQUEST_METHOD']== 'GET' && isset($_GET['q'])){
        session_destroy();
    }

    if(isset($_SESSION['szam'])){
        $_SESSION['szam']++;
    } else{
        $_SESSION['szam'] = 1;
        
    }
    echo "<br>";

    var_dump($_SESSION);
    echo "<a href=\"session.php? q=1\">Törlés</a>";
