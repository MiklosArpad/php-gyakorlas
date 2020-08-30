 <?php
 
 require_once ('config/init.php');
 printHtml('html/header.html');
 

 echo printMenu();
 printHtml('html/footer.html');
 
 
 $con -> close();