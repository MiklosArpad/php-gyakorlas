<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Országok</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="jquery-3.3.1.min.js"></script>
        <script src="orszag.js"></script>
    </head>
    <body>
        <form action="index.php"> <!-- ha nincs method, akkor alapértelmezetten get-tel megy szerverre az adat -->
            <select name="continent">
                <option value="0">Mind</option>
                <?php require_once './foldreszek.php';?>
            </select>
            <p>
                Növekvő: <input type="radio" name="order" value="ASC" checked>
                Csökkenő: <input type="radio" name="order" value="DESC">
            </p>
            <p>
                Ország <input type="checkbox" name="category[]" value="O">
                Főváros <input type="checkbox" name="category[]" value="F">
                Népesség <input type="checkbox" name="category[]" value="N">
            </p>
            <input type="submit" value="Szűrés">
        </form>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Sorszám</th>
                    <th>Ország</th>
                    <th>Főváros</th>
                    <th>Népesség</th>
                </tr>
            </thead>
            <?php require_once './orszagok.php'; ?>
        </table>
    </body>
</html>
