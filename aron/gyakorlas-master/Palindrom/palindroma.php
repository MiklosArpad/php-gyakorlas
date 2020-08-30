<?php
    
	 // error_reporting(0);
     var_dump($_GET); 
     if(empty($_GET)){
		 die("Használd a kezdőlapot!");
		 
	 }
       
   $str = $_GET['mondat'];	 
   if(mb_strlen($str) == 0){
	   header("Location: Palindrom-e.html");   
   }
	 

       //die();
      $irasjelek = array('?','!',',',' ');
     //$str = "Géza kék az ég!";
      echo $str."<br>";
	  $encode = mb_detect_encoding($str);
	  echo $encode."<br>";
      echo mb_strlen($str)."<br>"; 
     /* $reverse = strrev($str); 	
      echo $reverse."<br>";
	
     for ($i; $i < mb_strlen($str); $i++){
		   echo $str[$i].",";
		 
		 
	 }*/
	   $reverse = "";
	   $temp = "";
       for($i = 0; $i < mb_strlen($str); $i++){
		   $char = mb_substr($str,$i,1,$encode);
		   if(!in_array($char, $irasjelek)){
			   $char = mb_strtolower($char, $encode);
		   $reverse = $char.$reverse;
		   $temp = $temp.$char;
		   }
	   }
	   
       echo $reverse."<br>";
        echo $temp."<br>";
		
		if($temp == $reverse){
			 echo "Palindrom!";
		}else{
			echo "Nem palindrom!";
		}
	   
	    
?>