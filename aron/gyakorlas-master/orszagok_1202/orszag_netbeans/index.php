<?php
  
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Föld országai</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="jquery-3.3.1.min.js"></script>
    <!-- <script src="script.js"></script> -->
</head>
<body>
    <!-- szűrés kezdődik -->
    <form action="<?php $_SERVER['PHP_SELF'] ?>"> <!--hívó script lekérdezése a szerverről-->
    <select name="continent" class="">
        <option value="0">Mind</option>
    <?php
        //földrészek és id-juk lekérdezése a foldresz táblából, dinamikus select elem előállítása 
        require_once('connect.php');
        $sql = "SELECT * FROM foldreszek";
        $res = $connect -> query($sql);
        if (!$res){
            echo ("Hiba a földrészekkel!");
        } else {
            while ($row = $res -> fetch_array()){
                echo "<option value= \"{$row[0]}\" > {$row[1]} </option>";
            }
        }
    ?>
        </select>
        <select name="limit">
            <option value="0">mind</option>
            <option value="10">10</option>
            <option value="25">25</option>
        </select>
        <p>csökkenő sorrend<input type="radio" name="sorrend" value="csokkeno"></p>
        <p>növekvő sorrend<input type="radio" name="sorrend" value="novekvo"></p> 
        <p><input type="checkbox" name="rendez[]" value="O">Országnév
        <input type="checkbox" name="rendez[]" value="F">Főváros
        <input type="checkbox" name="rendez[]" value="N">Népesség</p>
        <input type="submit" value="Szűrés">
    </form> 
    <!-- szűrés vége -->
 
    <!-- adatok megjelenítésére szolgáló tábla fejléce -->
    <table class="table">
    <caption style="caption-side: top; text-align: center">Országok adatai</caption>
    
    <thead class="table-dark">
        <tr>
            <th>Kód</th>
            <th>Ország</th>
            <th>Főváros</th>
            <th>Népesség</th>
        </tr>
    </thead>
    <!-- tábla fejlécének a vége -->
    <?php
        $sql = "SELECT * FROM orszagok";
        if (isset($_GET['continent'])){
            //lekérdezés bővítése a kontinensre történő szűréssel
            $sql .= $_GET['continent'] == 0 ? "" : " WHERE foldreszkod = ".$_GET['continent'];            
        }
        //lekérdezés sorrendjének meghatározása
        $order = " ORDER BY";
        if (isset($_GET['rendez']) && count($_GET['rendez']) > 0){
            $rendez = $_GET['rendez'];
                foreach ($rendez as $r) {
                    switch ($r){
                    case "O" : $order .= " onev,"; break;
                    case "F" : $order .= " fovaros,"; break;
                    case "N" : $order .= " nepesseg,"; break;
                }
            }
            $order = substr($order, 0, strlen($order)-1);
        } else {
            $order = " ORDER BY onev";
        }
        if (isset($_GET['sorrend'])){
            $sql .= $_GET['sorrend'] == 'csokkeno' ? $order." DESC" : $order." ASC";
        }
        //sorrend beállításának befejezése
        //a tábla sorrainak oldalakra tördelése és paraméterezése 
        $limit = 0;
        $pageCount = 0;
        $start = 0;
        if (isset($_GET['limit']) && $_GET['limit'] != 0){
            if ($res = $connect -> query($sql)){
                $limit = $_GET['limit'];
                $pageCount = ceil($res -> num_rows / $limit);
            }
            if (!empty($_GET['page'])){
                $page = $_GET['page'];
                if ($page > 1) {
                    $start = ($_GET['page'] - 1) * $limit  - 1;
                }
            }
            $sql .= " LIMIT {$start},".$limit;
        }
        //VÉGE az oldalakra tördelésnek
        $sql .= ";";  //lekérdezés lezárása
        echo $sql."<br>"; //teszt jeleggel kiíratjuk a lekérdezésünk, ellenőrizzük a szintaktikát
                
        $res = $connect -> query($sql); //lekérdezés végrehajtása
        if (!$res){ //Sikeresen létre jött-e a a result tip. objektum, ha sikertelen a lekérdezés, akkor false értékű a változó.
            echo "Hiba a lekérdezés végrehajtásakor!";
        } else {
            $number = 1;
            echo "A lekérdezésnek ".$res -> num_rows." sor felelt meg."; // teszt jellegű
            while ($row = $res -> fetch_assoc()){ //Sorokra bontás művelete, amíg van újabb sor a res objektumban.
                echo "<tr>";
                echo '<td>'.$number.'</td>';
                echo '<td>'.$row['onev'].'</td>';
                echo '<td>'.$row['fovaros'].'</td>';
                echo '<td>'.$row['nepesseg'].'</td>';
                echo "</tr>";
                $number++;
            }
        }
        echo "</table>";
        //echo $pageCount."<br>";
        //echo $_SERVER['QUERY_STRING']."<br>";
        $link = $_SERVER['QUERY_STRING']; //url azon része, mely a scriptet követően szerepel pl. ?continent=0&limit=10 
        $pageFound = strpos($link, "page"); //van-e már page szó az urlben
        //echo $pageFound."<br>";
        if ($pageFound !== false) { //a page szó kezdete a sztringben
            $link = substr($link, 0, $pageFound-1);
        }
        //echo $link."<br>";
        // Navigációs linkek előállítása és megjelenítése.
        if ($pageCount > 0){ 
            for($i = 1; $i <= $pageCount; $i++){
                echo '<a href="index.php?'.$link.'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
            }
        }
    ?>
</body>
</html>