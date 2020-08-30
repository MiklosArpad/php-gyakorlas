<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Űrlap</title>
        <style></style>
    </head>
    <body>
        <form method="POST" action="test.php">
            <input type= "text" placeholder="Keresztnév" name="firstname">
            <br>
            <input type="number" min="5" max="120" placeholder="Kor" name="age">
            <br>
            <input type="submit" value="Küldés">
        </form>
    </body>
</html>

<?php
 // SZÉLJEGYZET:


// form HTML elemnek két fontos attr.

// method: kliensből szerver felé POST vagy GET metódussal (szuperglobál segítségével)
// küldünk adatot

// action: erőforrást vár -> a kliensből posttal vagy gettel küldött adatokkal
// szerveroldalon melyik szkript (fájl) foglalkozzon... ki dolgozza dolgozza...




?>