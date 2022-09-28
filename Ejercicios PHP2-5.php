<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 5</title>
</head>
<body>
    
    <?php
        function mostrararray($array){
            echo "[";
            for ($i=0; $i < count($array); $i++) { 
                echo $array[$i].", ";
            }
            echo "] <br>";
        }

        $array = array();
        $suma = 0;
        
        for ($i=0; $i < 50; $i++) { 
            $array[$i] = rand(-100, 100);
            $suma += $array[$i];
        }
        
        mostrararray($array);

        echo "<li>Suma: $suma</li>";
        echo "<li>Promedio: ".$suma/50 ."</li>";
    ?>
    
</body>
</html>