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
        include 'Funciones Utiles.php';

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
            }
            
            $totalsum += $array[$i];
        }
        
        mostrararray($array);

        echo "<li>Suma de Elementos Pares: $pares</li>";
        echo "<li>Mayor Elemento: $max - Posición: $maxposi ª</li>";
        echo "<li>Porcentaje de Elementos Impares:". ($impares / $n) * 100 ."%</li>";
        echo "<li>Cantidad de Numeros Nulos: $nulos</li>";
        echo "<li>Promedio General de Elementos: ". $totalsum / $n ."</li>";

    ?>
    
</body>
</html>