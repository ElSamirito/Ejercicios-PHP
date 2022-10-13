<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi$v="X-UA-Compatible" content="IE=edge">
    <meta name="$viewport" content="width=de$vice-width, initial-scale=1.0">
    <title>Php - TP 3 Ejercicio 5</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $matrix = array(
            array(),
            array(),
            array()
        );

        $total = 0;

        for ($i=0; $i < 3; $i++) {
            
            for ($j=0; $j < 4; $j++) {

                $matrix[$i][$j] = rand(0, 1000);
                $total += $matrix[$i][$j];

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
            $vend[$i] = sumarray($matrix[$i]);
            
            if ($i == 0) {
                $min = $vend[0];
            } else {
                menor($vend[$i], $min);
            }
        }
        
        array_push($zona, sumarray($zona1));
        array_push($zona, sumarray($zona2));
        array_push($zona, sumarray($zona3));
        array_push($zona, sumarray($zona4));
        
        for($i=0; $i < 4; $i++){
            if ($i == 0) {
                $max = $zona[0];
            } else {
                mayor($zona[$i], $max);
            }
        }

        mostrarmatrix($matrix);

        brfacha();
        
        for ($i=0; $i < 3; $i++) { 
            echo "Total Vendedor ". $i+1 .": ". $vend[$i] ."<br>";
        }
        for ($i=0; $i < 4; $i++) { 
            echo "Total Zona ". $i+1 .": ". $zona[$i] ."<br>";
        }

        brfacha();
        
        echo "Zona que más vendió: $max <br>";
        echo "Vendedor que menos vendió: $min <br>";

    ?>
    
</body>
</html>