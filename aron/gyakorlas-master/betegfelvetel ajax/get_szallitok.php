<?php
    require_once('config/connect.php');
    $limit = 5; 
    if (isset($_GET["page"])) {  
      $pn  = $_GET["page"];  
    }  
    else {  
      $pn=1;  
    };   
    $start_from = ($pn-1) * $limit;   
    if(isset($_GET['data'])){
    $adat = $_GET['data'];
    $sql = "SELECT * FROM betegszallito ORDER BY $adat ASC LIMIT $start_from, $limit";
    }else{
    $sql = "SELECT * FROM betegszallito LIMIT $start_from, $limit";
    }
    $result = $connect->query($sql);

    $number = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo'<td>' . $row['id'] . '</td>';
        echo'<td>' . $row['nev'] . '</td>';
        echo'<td>' . $row['illetekes'] . '</td>';
        echo'<td>' . $row['varos'] . '</td>';
        echo'<td>'.$row['ar'].'</td>';
        echo"</tr>";
        $number++;
    }

?>