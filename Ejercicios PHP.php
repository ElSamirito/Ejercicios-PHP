<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 8</title>
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

<<<<<<< HEAD
        function menor($elem, &$min){
            if($elem < $min) {
                $min = $elem;
=======
        function parimpar($elem){
            if($elem % 2 == 0) {
                return true;
            }else {
                return false;
>>>>>>> 0ebd11c0c9b8fe20b11029debcc7608bbe77df61
            }
        }

        function mayor($elem, &$max){
            if($elem > $max) {
                $max = $elem;
            }
        }

<<<<<<< HEAD
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
=======
        $array = array();
        $maxposi = $max = $pares = $impares = $nulos = $totalsum = 0;
        $n = rand(1, 50);

        for ($i=0; $i < $n; $i++) { 
            $array[$i] = rand(0, 1000);

            if ($i == 0) {
                $min = $array[0];
                $max = $array[0];
            }else {
                mayor($array[$i], $max);
                if ($array[$i] == $max) {
                    $maxposi = $i;
                }
            }

            if (parimpar($array[$i])) {
                $pares += $array[$i];
            }else {
                $impares++;
            }

            if ($array[$i] == 0) {
                $nulos++;
>>>>>>> 0ebd11c0c9b8fe20b11029debcc7608bbe77df61
            }
            
            $totalsum += $array[$i];
        }
        
<<<<<<< HEAD
        mostrararray($alumnos);
        cantidadenarray($alumnos, 8, $promo);
        cantidadenarray($alumnos, 6, $apro);

        echo "<li>La cantidad de alumnos promocionados es $promo (". ($promo / 22) * 100 ."%)</li>";
        echo "<li>La cantidad de alumnos aprobados es $apro (". ($apro / 22) * 100 ."%)</li>";
        echo "<li>La nota promedio fue ". $sum / 22 ."</li>";
        echo "<li>Menor nota: $min; En posición: $minpos</li>";
        echo "<li>Mayor nota: $max; En posición: $maxpos</li>";
=======
        mostrararray($array);

        echo "<li>Suma de Elementos Pares: $pares</li>";
        echo "<li>Mayor Elemento: $max - Posición: $maxposi ª</li>";
        echo "<li>Porcentaje de Elementos Impares:". ($impares / $n) * 100 ."%</li>";
        echo "<li>Cantidad de Numeros Nulos: $nulos</li>";
        echo "<li>Promedio General de Elementos: ". $totalsum / $n ."</li>";
>>>>>>> 0ebd11c0c9b8fe20b11029debcc7608bbe77df61

    ?>
    
</body>
</html>