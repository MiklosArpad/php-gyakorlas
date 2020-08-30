<?php

require_once 'connect.php';

$sql = "SELECT * FROM orszagok";
if (isset($_GET['continent'])) {
    $sql .= $_GET['continent'] != 0 ? " WHERE foldreszkod=" . $_GET['continent'] : "";
}

if (!empty($_GET['category'])) {
    $order = " ORDER BY";
    foreach ($_GET['category'] as $cat) {
        switch ($cat) {
            case "O" : $order .= " onev,";
                break;
            case "F" : $order .= " fovaros,";
                break;
            case "N" : $order .= " nepesseg,";
        }
    }
    $order = substr($order, 0, -1);
    $sql .= $order;
    $sql .= " " . $_GET['order'];
}
echo $sql . "<br>";
$result = $connect->query($sql);
if (!$result) {
    die("Eredménytelen a lekérdezés!");
}
echo $result->num_rows . " rekord felelt meg a lekérdezésnek.";
//var_dump($result);
while ($row = $result->fetch_assoc()) {
    //echo $row['okod']." ".$row['onev'].$row["fovaros"]." ".$row["nepesseg"]."<br>";
    echo "<tr>";
    echo "<td>" . $row['okod'] . "</td>";
    echo "<td> {$row['onev']} </td>";
    echo "<td> {$row['fovaros']} </td>";
    echo "<td> {$row['nepesseg']} </td>";
    echo "</tr>";
}
