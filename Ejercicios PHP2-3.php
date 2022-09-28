<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 3</title>
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

        $array = array();
        
        for ($i=1; $i <= 50; $i++) { 
            $array[$i-1] = $i*2;
        }
        
        mostrararray($array);
    ?>

</body>
</html>