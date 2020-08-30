<?php
session_start();
require_once('config/connect.php');
$sql = "SELECT * FROM kategoriak";
$result = $connect->query($sql);
if (!$result) {
    echo "A lekérdezést nem sikerült végrehajtani!";
} else {
    $kategoriak = '<option vlaue="0">Válasszon kategóriát!</option>';
    while ($row = $result->fetch_array()) {
	$kategoriak .= '<option value="' . $row[0] . '">' . $row[1] . '</option>';
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Álláskereső</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/allas.js"></script>

    </head>
    <body>
	<div class="container ">
	    <?php
	   //echo $_SESSION['user'];
	    if (!empty($_SESSION['user'])) {
		
		echo file_get_contents("html/menu_in.html");
	    } else {
		
		echo file_get_contents("html/menu_out.html");
	    }
	    if (!empty($_SESSION['error'])){
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	    }
	    ?>
	    <div class="jumbotron">
		<h1>Álláskereső portál</h1>
		<div class="form-group">
		    <select class="form-control" id="kategoriak">

			<?php echo $kategoriak; ?>
		    </select>
		</div>
		<button class="btn btn-outline-primary keres" >Keresés</button>
	    </div>
	    <div class="container-fluid" id="allasok">

	    </div>

	</div>


    </body>
</html>
