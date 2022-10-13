<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi$v="X-UA-Compatible" content="IE=edge">
    <meta name="$viewport" content="width=de$vice-width, initial-scale=1.0">
    <title>Php - TP 3 Ejercicio 7</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $matrix = array();
        
        for ($i=0; $i < 4; $i++) {
            
            for ($j=0; $j < 4; $j++) {
                $matrix[$i][$j] = rand(-50, 100);
            }

        }

        $prom = promatrix($matrix);
        
        $max = $min = null;
        
        mayormatrix($matrix, $max);
        menormatrix($matrix, $min);
        
        mostrarmatrix($matrix);

        brfacha();

        echo "Promedio General de la Matriz: $prom <br>";
        echo "Mayor Valor de la Matriz: $max <br>";
        echo "Menor Valor de la Matriz: $min <br>";
    
        brfacha();
    
        $backup = $matrix[3];

        for ($i=0; $i < count($matrix); $i++) { 
            $matrix[3][$i] = $matrix[$i][$i];

            $matrix[$i][$i] = $backup[$i];
        }
        
        mostrarmatrix($matrix);

    ?>

</body>
</html>