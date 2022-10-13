<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 10</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $array = array();

        for ($i=0; $i < 50; $i++) {
            
            $array[$i] = rand(-100, 100);

            if ($array[$i] == 0) {
                $flag = true;
            }else {
                $flag = false;
            }

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

        }
        
        mostrararray($array);

        echo "<li>Menor Elemento: $min; Posición: $minpos</li>";
        echo "<li>Mayor Elemento: $max; Posición: $maxpos</li>";
        if ($flag) {
            echo "<li>Existe el 0</li>";
        } else {
            echo "<li>No Existe el 0</li>";
        }

    ?>
    
</body>
</html>