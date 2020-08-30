<?php
require_once('../config/connect.php');
$sql = "SELECT id, munkaado, munkakor, hely FROM allasok";
if (!empty($_GET['kat']) && ($_GET['kat'] != 0)){
    $sql .= " WHERE kategoria_id = ".$_GET['kat'];
}
$sql .= " ORDER BY rogzitve DESC";
$result = $connect -> query($sql);
if (!$result){
    echo "Hiba a lekérdezésben!";
} else {
    $html = '<div class="row">';
    while ($row = $result -> fetch_assoc()){
	$html .= '<div class="card w-100">'
		. '<h3 class="card-title">'.$row['munkakor'].'</h3>'
		. '<div class="card-body">'
		. '<p class="card-text">'.$row['munkaado'].'</p>'
		. '<p class="card-text">'.$row['hely'].'</p>'
		. '<a href="details.php?id='.$row['id'].'" class="btn btn-outline-primary float-right">Részletek</a>'
		. '</div>'
		    
		. '</div>';
    }
    $html .= '</div>';
    echo $html;
}

