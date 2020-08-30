<?php
    //include, include_once, require, require_once
    require_once('connect.php');
    $sql = "SELECT * FROM foldreszek";
    $result = $connect -> query($sql);
    if (!$result){
        die("Hiba a lékrdezésben!");
    }
?>
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
    
    <form action="#">
        <select name="continent">
            <option value="0">Mind</option>
            <?php
                while ($row = $result -> fetch_array()){
                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                }    
            ?>    
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

    <?php
        $sql = "SELECT * FROM orszagok";
        if (isset($_GET['continent'])){
            $sql .= $_GET['continent'] != 0 ? " WHERE foldreszkod=".$_GET['continent'] : "";
        }
        
        if (!empty($_GET['category'])){
            $order = " ORDER BY";
            foreach ($_GET['category'] as $cat) {
                switch ($cat){
                    case "O" : $order .= " onev,"; break;
                    case "F" : $order .= " fovaros,"; break;
                    case "N" : $order .= " nepesseg,";
                }    
            }
            $order = substr($order, 0, -1);
            $sql .= $order;
            $sql .= " ".$_GET['order'];
        }
        echo $sql."<br>";     
        $result = $connect -> query($sql);
        if (!$result){
            die("Eredménytelen a lekérdezés!");
        }
        echo $result->num_rows." rekord felelt meg a lekérdezésnek.";
        //var_dump($result);
        while ($row = $result -> fetch_assoc()){
            //echo $row['okod']." ".$row['onev'].$row["fovaros"]." ".$row["nepesseg"]."<br>";
            echo "<tr>";
            echo "<td>".$row['okod']."</td>";
            echo "<td> {$row['onev']} </td>";
            echo "<td> {$row['fovaros']} </td>";
            echo "<td> {$row['nepesseg']} </td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>