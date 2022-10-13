<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 3 Ejercicio 1</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $matrix = array();

        for ($i=0; $i < 3; $i++) {
            
            for ($j=0; $j < 3; $j++) {

                $matrix[$i][$j] = rand(-100, 100);
                
            }

        }

        mostrarmatrix($matrix);
        
    ?>
    
</body>
</html>