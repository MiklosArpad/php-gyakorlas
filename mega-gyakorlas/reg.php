<?php

// logikai fájl aki a regeisztrációt feldolgozza...

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'Nickname: ' . $_POST['nickname'] . '<br>';
    echo 'E-mail cím: ' . $_POST['e-mail-cim'] . '<br>';
    echo 'Jelszó: ' . $_POST['pwd'] . '<br>';
} else {
    echo 'Nem POST-tal érkeztek az adatok!';
}

// regisztráció ...