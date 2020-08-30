
<?php
session_start();
require_once('config/connect.php');
require_once 'html/header.html';
require_once 'set_nav.php';
if (!isset($_SESSION['user'])) {
    echo '<h1>Az adatok megtekintéséhez először jelentkezzen be!</h1>';
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <table class="table table-striped">
                    <caption style="caption-side: top; text-align: center">Beteg adatai</caption>
                    <thead class="table-dark text-center">
                        <tr>
                            <th class="beteg-adatok" data-id="id">Kód</th>
                            <th class="beteg-adatok" data-id="nev">Név</th>
                            <th class="beteg-adatok" data-id="illetekes">Szállító neve</th>
                            <th class="beteg-adatok"  data-id="varos">Város</th> 
                            <th class="beteg-adatok" data-id="ar">Szállítás ára</th>
                        </tr>    
                    </thead> 
                    <tbody class="tablazat text-center">
                    <?php include_once("get_szallitok.php");?>
                    </tbody>
</table></div><div class='col-1'></div></div></div>
<div class="d-flex justify-content-center">
<ul class="pagination"> 
      <?php   
        $sql = "SELECT COUNT(*) FROM betegszallito";   
        $rs_result = mysqli_query($connect,$sql);   
        $row = mysqli_fetch_row($rs_result);   
        $total_records = $row[0];   
          
        $total_pages = ceil($total_records / $limit);   
        $pagLink = "";                         
        for ($i=1; $i<=$total_pages; $i++) { 
          if ($i==$pn) { 
              $pagLink .= "<li class='active'><a href='szallitok.php?page="
                                                .$i."'>".$i."</a></li>"; 
          }             
          else  { 
              $pagLink .= "<li><a href='szallitok.php?page=".$i."'> 
                                                ".$i."</a></li>";   
          } 
        };   
        echo $pagLink;   
      ?> 
      </ul> 
      </div>

    <?php include_once("html/footer.html");    ?>         
  