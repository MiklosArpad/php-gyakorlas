<?php
session_start();
$output = "";
require_once('config/functions.php');
require_once('config/connect.php');

$sql = "SELECT nev, ar from products WHERE id = ?";
$stmt = $con -> prepare($sql);
if (isset($_SESSION['cart'])) {
    var_dump($_SESSION['cart']);
    $cart = $_SESSION['cart'];
    $output .= '<table>'
            . '<tr>'
            . '<th>Megnevezés</th>'
            . '<th>Egységár</th>'
            . '<th>Mennyiség</th>'
            . '<th>Összesen</th>'
            . '<th>Művelet</th>'
            . '</tr>';
    array
    foreach ($cart as $id => $db) {
        $stmt -> bind_param('i', $id);
        $stmt -> execute();
        $stmt -> bind_result($nev, $ar);
        $stmt -> fetch();
        $output .='<tr>'
                . '<td>'.$nev.'</td>'
                . '<td>'.$ar.'</td>'
                . '<td>'.$db.'</td>'
                . '<td>'.$ar * $db.'</td>'
                . '<td><span class="btn btn-otline-danger">&#128465;</span></td>'        
                . '</tr>';
        
    }
    $output .= '</table>';
} else {
    $output .= '<h3 class="text-warning">Üres a kosár!</h3>';
}
echo file_get_contents("html/header.html");
menu();
echo $output;
echo '<a href="php/emptycart.php">Kosár ürítése</a>';
echo file_get_contents("html/footer.html");
$con -> close();