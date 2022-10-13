<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 3 Ejercicio 4</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $matrix = array();

        $pares = array();

        for ($i=0; $i < 5; $i++) {
            
            for ($j=0; $j < 4; $j++) {

                $matrix[$i][$j] = rand(0, 1000);

            }

        }

        mostrarmatrix($matrix);
        
        for ($i=0; $i < 5; $i++) {
            
            for ($j=0; $j < 4; $j++) {
                
                if (parimpar($matrix[$i][$j])) {

                    array_push($pares, $matrix[$i][$j]);
                    
                    $matrix[$i][$j] = -1;
                
                }
                
            }
            
        }

        echo "<br>";
        echo "Array Elementos pares:";
        mostrararray($pares);
        echo "<br>";
        
        mostrarmatrix($matrix);

    ?>
    
</body>
</html>