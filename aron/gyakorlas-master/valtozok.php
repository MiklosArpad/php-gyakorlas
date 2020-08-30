<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
	</style>
	
	
	
	
</head>
<body>
    <?php
        echo "Hello<br>";
        print("World!");
        $v = 5;
        echo "<br>".$v;
        $v++;
        $szk = "&nbsp";  // non breaking space
        echo"<br>".$v;
		
		
		for($i=0; $i<10; $i++)
		{
			
			echo "<br>" .$i;
			
			
		}
		
		
		echo "<table class='table'>";
		for ($i = 1; $i < 101; $i++) 
		{
			
			
			if($i % 10 ==1) echo "<tr>";
						
			echo "<td>" .$i."</td>";
			if($i % 10 ==0) echo "<tr>";
			

		}		
		echo "</table>";
		
		
		
		
		
		
		
		
		
		
		
    ?>
</body>
</html>