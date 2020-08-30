<?php
session_start();
if (empty($_SESSION['user'])){
    header("Location: index.php");
}

require_once('config/connect.php');
$sql = "SELECT * FROM kategoriak";
$result = $connect->query($sql);
if (!$result) {
    echo "A lekérdezést nem sikerült végrehajtani!";
} else {
    $kategoriak = '<option value="0">Válasszon kategóriát!</option>';
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
	<script src="js/ellenoriz.js"></script>

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
	    
	    <form class="container-fluid" method="POST" action="new_job.php">
		<select name="kategoria" class="form-control">
		    <?php echo $kategoriak; ?>
		</select>
		<!-- kategoria_id munkaado munkakor leiras fizetes hely -->
		<input class="form-control" type="text" placeholder="Munkaadó" name="munkaado">
		<input class="form-control" type="text" placeholder="Munkakör" name="munkakor">
		<textarea class="form-control" name="leiras" >Állás ismertetése</textarea>
		<input class="form-control" type="number" placeholder="Fizetés" name="fizetes" min="0">
		<input class="form-control" type="text" placeholder="Munkavégzés helye" name="hely">
		<button class="kuld form-control btn btn-success" type="submit" disabled="disabled">
Rögzít</button>	    </form>

	</div>


    </body>
</html>

