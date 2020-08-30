<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2D tömb</title>
    <style>
        .nulla{
            background-color: green;
        }
        .foatlo{
            background-color: lightblue;
        }    
        .mellek{
            background-color: lightgreen;
        }
        .neg{
            background-color: blue;
        }
        .poz{
            background-color: #ff8080;
        }
        table, td{
            border: 1px solid gray;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
    <?php
        $t = array();
        
        for ($i = 0; $i < 100; $i++){
            if ($i % 10 == 0) echo "<tr>";
            $t[$i] = rand(-50, 50);
            if ($t[$i] == 0) echo "<td class = 'nulla'>".$t[$i]."</td>"; else
            if ($i % 11 == 0) echo "<td class = 'foatlo'>".$t[$i]."</td>"; else
            if ($i % 9 == 0) echo "<td class = 'mellek'>".$t[$i]."</td>"; else
            if ($t[$i] < 0) echo "<td class = 'neg'>".$t[$i]."</td>"; else
            if ($t[$i] > 0) echo "<td class = 'poz'>".$t[$i]."</td>";
            if ($i % 10 == 9) echo "</tr>";
        }
        //var_dump($t);


    ?>
    </table>
</body>
</html>