<?php
    //$_GET[]
	if(!($_SERVER['REQUEST_METHOD'] == "POST")){
	     die("Előbb az űlapot töltsd ki!");		 
	
	}
	if(empty($_POST['firstname']) || empty($_POST['age'])){
		echo "Mindkét mezőt töltsd ki!";
				
	}
	echo "Keresztneved: ".$_POST['firstname']."<br>";
	echo $_POST['age']. "éves vagy"."<br>";
	//var_dump($_POST);
	?>