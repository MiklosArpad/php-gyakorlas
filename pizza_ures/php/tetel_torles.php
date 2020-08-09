<?php

session_start();

$modositandoTetelId = $_POST['id']; // ezt az id-jű ételt kell a kosárból kihajítani ...
// kulcs - érték páros tömb
$kosar = $_SESSION['kosar']; // SEGÉDVÁLTOZÓ

unset($kosar[$modositandoTetelId]); // adott termék törlése kulcs alapján a segéváltozóból

if (empty($kosar)) { // itt ráviuzsgálunk, hogy maradt-e még valami a kosárban?
    unset($_SESSION['kosar']); // akkor meg is szüntetjük a kosár session-t
} else {
    $_SESSION['kosar'] = $kosar; // ha nem üres, akkor az eredeti sessionnek értékül adjuk a módosított segédváltozót (ő az akiből töröltünk!!!)
}
