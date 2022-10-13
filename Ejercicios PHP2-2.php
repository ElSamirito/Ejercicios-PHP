<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 2</title>
</head>
<body>
    
    <?php
        include 'Funciones Utiles.php';

        $randarray = array();
        
        for ($i=0; $i < 5; $i++) { 
            $randarray[$i] = rand(-100, 100);
        }
        
        mostrararray($randarray);

        echo "El array tiene ". count($randarray) ." elementos";
    ?>

</body>
</html>