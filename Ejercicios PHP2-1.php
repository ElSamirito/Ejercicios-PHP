<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 1</title>
</head>
<body>
    
    <?php
    
        function mostrararray($array){

            echo "[";
            for ($i=0; $i < count($array); $i++) {
                
                if ($i == (count($array) - 1)) {
                    echo $array[$i];
                } else {
                    echo $array[$i].", ";
                }

            }
            echo "] <br>";
        
        }

        $randarray = array();
        
        for ($i=0; $i < 5; $i++) { 
            $randarray[$i] = rand(-100, 100);
        }
        
        mostrararray($randarray);

        echo "El 1er valor del array es ". $randarray[0];
        echo "<br>";
        echo "El ultimo valor del array es ". $randarray[4];
    ?>

</body>
</html>