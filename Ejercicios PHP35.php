<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Ejercicio 35</title>
</head>
<body>

    <?php
        function cuadrado($num, &$sqr, &$cb){
            $sqr = pow($num, 2);
            $cb = pow($num, 3);
        }

        $sqr = $cb = 0;
        $randnum = rand(-100, 100);
        echo "El valor aleatorio es: $randnum";
        cuadrado($randnum, $sqr, $cb);
        echo "<li>El cuadrado de $randnum es $sqr</li>";
        echo "<li>El cubo de $randnum es $cb</li>";
    ?>

</body>
</html>