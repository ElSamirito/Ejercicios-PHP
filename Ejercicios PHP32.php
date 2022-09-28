<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Ejercicio 32</title>
</head>
<body>

    <?php
        function randnums($a){
            if ($a > 0) {
                echo "El numero es positivo <br>";
            }elseif ($a < 0) {
                echo "El numero es negativo <br>";
            }else{
                echo "El numero es 0 <br>";
            }
        }
        for($i=0; $i<=10; $i++){
            $randnum = rand(-100, 100);
            randnums($randnum);
        }
        
    ?>

</body>
</html>