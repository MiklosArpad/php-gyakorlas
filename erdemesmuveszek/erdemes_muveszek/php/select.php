<?php

require_once '../config/connect.php';
$sql = "select ev from szemely";

$res = $link->query($sql);
$html = '<select><option>Kérkük válasszon!</option></select>';

echo $html;
