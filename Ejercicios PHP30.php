<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Ejercicio 30</title>
</head>
<body>
    
    <?php
        function randnums(){
            $negativo = 0;
            $positivo = 0;
            $suma = 0;
            for ($i = 1; $i<= 10; $i++){
                $randnum = rand(-100,100);
                echo "El $i º numero es $randnum <br>";
                $suma += $randnum;
                if($randnum > 0){
                    $positivo++;
                }else{
                    $negativo++;
                }
            }
            echo "La suma de todos los numeros generados es $suma y el promedio ".$prom = $suma/10;
        }

        randnums();
    ?>
</body>
</html>