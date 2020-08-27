<?php

session_start();

if (isset($_POST['kajaid'])) {

    $torlendoTetelId = $_POST['kajaid'];
    // ezt az id-jű ételt kell a kosárból kihajítani ...
    // kulcs - érték páros tömb
    $kosar = $_SESSION['kosar'];

    unset($kosar[$torlendoTetelId]);
    // adott termék törlése kulcs alapján a segéváltozóból

    if (empty($kosar)) { // itt ráviuzsgálunk, hogy maradt-e még valami a kosárban?
        unset($_SESSION['kosar']); // akkor meg is szüntetjük a kosár session-t
    } else {
        $_SESSION['kosar'] = $kosar;
    }
}
