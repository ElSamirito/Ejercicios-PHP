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
                $min = $elem;
            }
        }
        function mayor($elem, &$max){
            if($elem > $max) {
                $max = $elem;
            }
        }

        function cantidadenarray($array, $nota, &$cont){
            for ($i=0; $i < count($array); $i++) { 
                if ($array[$i] >= $nota) {
                    $cont++;
                }
            }
        }

        $alumnos = array();
        $min = $max = $minpos = $maxpos = $promo = $apro = $sum= 0;
        
        for ($i=0; $i < 22; $i++) { 
            $alumnos[$i] = rand(2, 10);
            $sum += $alumnos[$i];

            if ($i == 0) {
                $min = $alumnos[0];
                $minpos = $i;
                $max = $alumnos[0];
                $maxpos = $i;
            }else {
                menor($alumnos[$i], $min);
                mayor($alumnos[$i], $max);
                
                if ($min == $alumnos[$i]) {
                    $minpos = $i;
                }
                if ($max == $alumnos[$i]) {
                    $maxpos = $i;
                }
            }
        }
        
        mostrararray($alumnos);
        cantidadenarray($alumnos, 8, $promo);
        cantidadenarray($alumnos, 6, $apro);

        echo "<li>La cantidad de alumnos promocionados es $promo (". ($promo / 22) * 100 ."%)</li>";
        echo "<li>La cantidad de alumnos aprobados es $apro (". ($apro / 22) * 100 ."%)</li>";
        echo "<li>La nota promedio fue ". $sum / 22 ."</li>";
        echo "<li>Menor nota: $min; En posición: $minpos</li>";
        echo "<li>Mayor nota: $max; En posición: $maxpos</li>";

    ?>
    
</body>
</html>