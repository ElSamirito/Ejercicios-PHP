<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 7</title>
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

        function menor($elem, &$min){
            if($elem < $min) {
                $min = $array[$i];
            }
        }
        function mayor($elem, &$max){
            if($elem > $max) {
                $max = $array[$i];
            }
        }

        function cantidadenarray(&)

        $array = array();
        $min = $max = 0;
        
        for ($i=0; $i < 22; $i++) { 
            $array[$i] = rand(2, 10);            
            if ($i == 0) {
                $min = $array[0];
                $max = $array[0];
            }
        }
        
        mayormenor($array, $max, $min);
        mostrararray($array);

        echo "<li>Menor Elemento: $min</li>";
        echo "<li>Mayor Elemento: $max</li>";

    ?>
    
</body>
</html>