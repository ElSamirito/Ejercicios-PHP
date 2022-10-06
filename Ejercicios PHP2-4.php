<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - TP 2 Ejercicio 4</title>
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

        $array = array();
        $posi = $nega = $null = 0;
        
        for ($i=0; $i < 50; $i++) { 
            $array[$i] = rand(-100, 100);
            if ($array[$i] > 0) {
                $posi++;
            } else if ($array[$i] < 0) {
                $nega++;
            }else{
                $null++;
            }
        }
        
        mostrararray($array);

        echo "<li>Positivos:$posi</li>";
        echo "<li>Negativos:$nega</li>";
        echo "<li>Nulos:$null</li>";
    ?>
    
</body>
</html>