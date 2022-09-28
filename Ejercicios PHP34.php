<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Ejercicio 34</title>
</head>
<body>

    <?php
        function randnums($a, $b){
            return ($a+$b)/2;
        }
        $randa = rand(-100, 100);
        echo "Numero A: $randa <br>";
        $randb = rand(-100, 100);
        echo "Numero B: $randb <br>";
        echo "El promedio entre A y B es ".randnums($randa, $randb);
    ?>

</body>
</html>