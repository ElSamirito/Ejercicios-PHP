<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Ejercicio 33</title>
</head>
<body>

    <?php
        function randnums($a, $b){
            if ($a > $b){
                echo "A es mayor a B";
            }elseif($a < $b) {
                echo "A es menor que B";
            }else{
                echo "A y B son iguales";
            }
        }
        $randa = rand(-100, 100);
        echo "Numero A: $randa <br>";
        $randb = rand(-100, 100);
        echo "Numero B: $randb <br>";
        randnums($randa, $randb);
    ?>

</body>
</html>