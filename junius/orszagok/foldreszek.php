<?php

require_once 'connect.php';

$sql = "SELECT * FROM foldreszek";
$result = $connect->query($sql);

if (!$result) {
    die("Hiba a lékrdezésben!");
}

while ($row = $result->fetch_row()) {
    echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
    // könyebben: echo "<option value='{$row[0]}'>{$row[1]}</option>";
}
