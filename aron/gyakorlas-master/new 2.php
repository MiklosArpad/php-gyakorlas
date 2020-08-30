<?php
		/*$t = array();
		$t = array(1,2,3,5);
        $t[4] = 11;
		
		$t["3"]
		
		//array ( array(), array()]);*/
		 
		 $t = array(1,2,3,5);
		 var_dump($t);
		 echo "<br>";
		 echo count($t)."<br>";
		 echo sizeof($t)."<br>";
		 
		 for($i = 0; $i < sizeof($t); $i++){
			 echo $t[$i]."<br>";
			 echo $t["$i"]."<br>";
			 
		 }
         echo"Foreach<br>";
         foreach($t as $v){
			 echo $v. ",";			 
		 }
		 echo"<br>";
		$tt = array(array(1,2,3,4,5),
		            array("Éva","Józsi",4,3),
		            array ("alma","körte","szilva"));
		var_dump($tt);
			echo "<br>";
			for ($i = 0; $i <sizeof($tt); $i++)
			{
				for($j=0;$j<sizeof($tt[$i]); $j++)
				{
					echo $tt[$i][$j].",";
				}
				echo "<br>";
			}
			echo"<br>"
			foreach($tt as $v)
			{
				foreach ($v as $w)
				{
					echo $w." ";
				}
				echo"<br>";
			}
				
				
				
			
			
			
?>