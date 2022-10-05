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
                
                if ($i == (count($array) - 1)) {
                    echo $array[$i];
                } else {
                    echo $array[$i].", ";
                }
            
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
        $promo = $apro = $sum= 0;
        
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

        echo "<li>Cantidad de Alumnos Promocionados: $promo (". round(($promo / 22) * 100, 2) ."%)</li>";
        echo "<li>Cantidad de Alumnos Aprobados: $apro (". round(($apro / 22) * 100, 2) ."%)</li>";
        echo "<li>Nota Promedio: ". $sum / 22 ."</li>";
        echo "<li>Menor Nota: $min; Posición: $minpos</li>";
        echo "<li>Mayor Nota: $max; Posición: $maxpos</li>";

    ?>
    
</body>
</html>