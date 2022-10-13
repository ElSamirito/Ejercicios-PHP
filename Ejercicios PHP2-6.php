<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 6</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $array = array();
        $min = $max = 0;
        
        for ($i=0; $i < 50; $i++) { 
            $array[$i] = rand(-100, 100);
        }
        
        maxminarray($array, $max, $min);
        mostrararray($array);

        echo "<li>Menor Elemento: $min</li>";
        echo "<li>Mayor Elemento: $max</li>";
    ?>
    
</body>
</html>