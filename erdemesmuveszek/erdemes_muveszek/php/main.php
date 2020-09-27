<?php
session_start();
if (!isset($_SESSION['nev'])) {
    header('Location: ../nincs_belepve.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="../JS/js.js"></script>

    </head>
    <body>

        <div id="tartalom">
            <div id="szures"></div>
            <div id="adatok"></div>
            <button class="kilep btn btn-danger form-control">Kilép</button>
        </div>
    </body>
</html>
