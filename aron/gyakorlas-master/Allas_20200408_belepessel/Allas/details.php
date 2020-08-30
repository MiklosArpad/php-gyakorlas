<?php
require_once('config/connect.php');

if (!isset($_GET['id'])) {
    header("Location: index.php");
}
$id = $_GET['id'];
$sql = "SELECT * FROM allasok WHERE id = $id";
$result = $connect->query($sql);
if (!$result) {
    echo "Hiba a lekérdezésben!";
    echo $sql;
    echo "<a href='index.php'>Kezdőlap</a>";
} else {
    $row = $result->fetch_array();
    $html = '<div class="card col-12">'
	    . '<div class="card-header">'
	    . '<h3 class="card-title">' . $row[3] . '</h3>'
	    . '</div>'
	    . '<div class="card-body">'
	    . '<p class="card-text">Munkavégzés helye: ' . $row[6] . '</p>'
	    . '</div>'
	    . '<div class="card-footer">'
	    . '<p class="card-text">Kapcsolat: </p>'
	    . '</div>'
	    . '</div>';
}


$connect->close();
?>
<!DOCTYPE html>
<html lang = "hu">
    <head>
	<meta charset = "UTF-8">
	<title>Álláskereső</title>
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/allas.js"></script>

    </head>
    <body>
	<div class="container">
	    <?php echo $html; ?>
	    <a class="btn btn-outline-success" href="index.php">Kezdőlap</a>
	</div>
	
    </body>
</html>