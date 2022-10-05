<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 9</title>
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

        function parimpar($elem){
            if($elem % 2 == 0) {
                return true;
            }else {
                return false;
            }
        }

        $array = array();

        for ($i=0; $i < 20; $i++) {
            
            if (parimpar($array[$i])) {
                $array[$i] = rand(0, 100);
            }else{
                $array[$i] = rand(-100, 0);
            }

        }
        
        mostrararray($array);

    ?>
    
</body>
</html>