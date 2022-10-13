<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi$v="X-UA-Compatible" content="IE=edge">
    <meta name="$viewport" content="width=de$vice-width, initial-scale=1.0">
    <title>Php - TP 3 Ejercicio 6</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $matrix = array(
            array(),
            array(),
            array()
        );
        
        for ($i=0; $i < 3; $i++) {
            
            for ($j=0; $j < 4; $j++) {
                
                $matrix[$i][$j] = rand(0, 300);

            }

        }

        $zona1 = $zona2 = $zona3 = $zona4 = array();
        
        for ($i=0; $i < 3; $i++) { 
            array_push($zona1, $matrix[$i][0]);
            array_push($zona2, $matrix[$i][1]);
            array_push($zona3, $matrix[$i][2]);
            array_push($zona4, $matrix[$i][3]);
        }

        $vend = $zona = array();

        for($i=0; $i < 3; $i++){
            $vend[$i] = promarray($matrix[$i]);
        }
        
        array_push($zona, promarray($zona1));
        array_push($zona, promarray($zona2));
        array_push($zona, promarray($zona3));
        array_push($zona, promarray($zona4));
        
        $max = null;
        mayormatrix($matrix, $max);

        mostrarmatrix($matrix);

        brfacha();
        
        for ($i=0; $i < 3; $i++) { 
            echo "Promedio Campo ". $i+1 .": ". $vend[$i] ."<br>";
        }
        for ($i=0; $i < 4; $i++) { 
            echo "Promedio Zona ". $i+1 .": ". $zona[$i] ."<br>";
        }

        brfacha();
        
        $maxposi = findmatrix($max, $matrix);
        echo "Mayor lluvia: $max Campo: ". $maxposi[1] ." Zona: ". $maxposi[0] ."<br>";
        echo "El promedio de todas las mediciones es: ". promarray($vend) ." <br>";

    ?>
    
</body>
</html>