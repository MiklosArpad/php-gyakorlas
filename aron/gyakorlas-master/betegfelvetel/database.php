<?php
require_once 'html/header.html';

session_start();
require_once 'set_nav.php';

if (!isset($_SESSION['user'])) {
    echo '<h1>Az adatok megtekintéséhez először jelentkezzen be!</h1>';
    die();
}
?>
<body class="text-white" style="background-color: #8fd19e;">
    <div class="container">
        <div class="row">
            <div class="col-6"><img src="imges/Financial-Analysis2.jpg" style="width: 100%; height: 100%;"></div>
            <div class="col-6">
                <form action="<?php $_SERVER['PHP_SELF'] ?>"> 
                    <fieldset>
                        <legend>Szűrés</legend>
                        <h4> Betegszállítók legördülő listában</h4>
                        <select class="form-control" name = "transport">
                            <option value="0">Mind</option>          
                            <?php
                            require_once('config/connect.php');
                            $sql = "SELECT * FROM betegszallito";
                            $result = $connect->query($sql);
                            if (!$result) {
                                echo("Hiba a betegszallitokkal");
                            } else {
                                while ($row = $result->fetch_array()) {
                                    echo "<option value =\"{$row[0]}\" > {$row[1]}</option>";
                                    //echo '<option value= "'.$row[0].'">'.$row[1].'</option>';
                                }
                            }
                            ?>            

                        </select>

                        <input type="radio" name="sorrend" value="csokkeno"><label> Csökkenő sorrend</label>
                        <br>
                        <input type="radio" name="sorrend" value="novekvo"><label> Növekvő sorrend</label>
                        <br>
                        <input type="checkbox" name="rendez[]" value="N"><label> Név</label>
                        <br>
                        <input type="checkbox" name="rendez[]" value="T"><label> Taj-szám</label>
                        <br>
                        <input type="checkbox" name="rendez[]" value="L"><label> Lakcím</label>
                        <br>
                        <input class="btn btn-primary" type="submit" value="OK" style="width: 100%">
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <table class="table table-striped">
                    <caption style="caption-side: top; text-align: center">Beteg adatai</caption>
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Kód</th>
                            <th>Név</th>
                            <th>Taj-szám</th>
                            <th>Lakcím</th> 
                            <th>Vércsoport</th>
                        </tr>    
                    </thead> 
                    <?php
                    $sql = "SELECT * FROM beteg";
                    if (isset($_GET['transport'])) {

                        $sql .= $_GET['transport'] == 0 ? "" : " WHERE szallitoazon = " . $_GET['transport'];

                        /* if(GET['transport']== 0){
                          $sql.= "";

                          }else{

                          $sql.= "WHERE id = ".GET['transport'];

                          } */
                    }

                    $order = " ORDER BY";
                    if (isset($_GET['rendez']) && count($_GET['rendez']) > 0) {
                        $rendez = $_GET['rendez'];
                        foreach ($rendez as $r) {
                            switch ($r) {
                                case "N": $order .= " nev,";
                                    break;
                                case "T": $order .= " taj-szam,";
                                    break;
                                case "L": $order .= "lakcim,";
                                    break;
                            }
                        }
                        $order = substr($order, 0, strlen($order) - 1);
                    }
                    if (isset($_GET['sorrend'])) {
                        $sql .= $_GET['sorrend'] == 'csokkeno' ? $order . " DESC" : $order . " ASC";
                    }
                    $sql .= ";";
                    //echo $sql . "<br>";


                    $result = $connect->query($sql);

                    if (!$result) {

                        echo "Hiba a lekérdezés végrehajtásakor!";
                    } else {
                        $number = 1;
                        echo $result->num_rows . " sor felelt meg a lekérdezésnek!";

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='text-center'>";
                            echo'<td>' . $number . '</td>';
                            echo'<td>' . $row['nev'] . '</td>';
                            echo'<td>' . $row['taj-szam'] . '</td>';
                            echo'<td>' . $row['lakcim'] . '</td>';
                            echo'<td>'.$row['vercsoport'].'</td>';
                            echo"</tr>";
                            $number++;
                        }
                    }
                    echo "</table></div><div class='col-1'></div></div></div>";
                    ?>


                    </body>

                    </html>
