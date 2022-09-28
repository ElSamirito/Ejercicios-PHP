<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Ejercicio 26</title>
</head>
<body>
    
    <?php
        $suma = 0;
        for($i=1; $i<=25; $i++){
            $randnum = rand(-1000, 1000);
            echo "El numero aleatorio es $randnum <br>";
            $suma = $suma + $randnum;
        }
        echo "La suma de todos los numeros generados es $suma y el promedio ".$prom = $suma/25;
    ?>
    
</body>
</html>