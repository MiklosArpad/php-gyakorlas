<?php
require_once '../config/connect.php';

$sql = "SELECT * FROM kategoriak";
$res = $conn -> query($sql);
if (!$res){
    die("Hiba a kategóriák megállapítása közben!");
}
$html = "<option value='0'>Válassz!</option>";
//var_dump($res);
while ($row = $res -> fetch_assoc()){
    $html .= "<option value='{$row['id']}'>{$row['kategoria']}</option>";
}
echo $html;