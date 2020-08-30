<?php
session_start();
if (empty($_SESSION['user'])){
    $_SESSION['error'] = '<p class="text-danger"> Jogosulatlan kérés!</p>';
    http_response_code(502);
} else{
    require_once('../config/connect.php');
    if (!empty($_POST['id'])){
	$id = $_POST['id'];
	$sql = "UPDATE allasok SET torolve = 1 WHERE id = $id";
	$connect -> query($sql);
	if ($connect -> errno){
	    http_response_code(503);
	}
	$connect -> close();
    }
}
