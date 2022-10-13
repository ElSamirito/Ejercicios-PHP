<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 11</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $array = $array2 = array();

        for ($i=0; $i < 50; $i++) {
            
            $array[$i] = rand(-100, 100);
            
            if ($i == 0) {
                $min = $array[0];
                $minpos = $i;
                $max = $array[0];
                $maxpos = $i;
            }else {
                menor($array[$i], $min);
                mayor($array[$i], $max);
                
                if ($min == $array[$i]) {
                    $minpos = $i;
                }
                if ($max == $array[$i]) {
                    $maxpos = $i;
                }
            }
            
            if ($array[$i] > 0) {
                array_push($array2, $array[$i]);
            }

        }
        
        mostrararray($array);

        echo "<li>Menor Elemento: $min; Posición: $minpos</li>";
        echo "<li>Mayor Elemento: $max; Posición: $maxpos</li>";
        echo "<li>Elementos Mayores a 0:</li>";

        mostrararray($array2);

    ?>
    
</body>
</html>