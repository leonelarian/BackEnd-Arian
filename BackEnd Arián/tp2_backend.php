<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>EJERCICIOS</h1>
        <?php
        $a = 5;
        $numero1 = 8;
        $numero2 = 7;

    if ($a) {
        echo "1. La variable a es mayor que 0 es positivo";
        echo "<br>";
    }  elseif ($a) {
        echo "1. La variable a es menor que 0 es negativo";
        echo "<br>";
    }

    if ($a>1 & $a<10) {
        echo "2. Es mayor a 1 y menor a 10";
        echo "<br>";
    }

    if ($a>10 || $a<2){
        echo "3. Es mayor a 10 y menor a 2";
        echo "<br>";
        echo "cumple la condicion";
        echo "<br>";
        echo $numero1>$numero2+$numero1;
    }

    if ($numero1>$numero2){
        echo "<br>";
        echo "4. La suma de numero1 + numero2 es";
        echo $numero1 + $numero2;
        echo "<br>";
        echo "La resto de numero1 - numero2 es";
        echo $numero1 - $numero2;
    } elseif ($numero2>$numero1){
        echo "<br>";
        echo "la multiplicacion de numero2 * numero1 es";
        echo $numero2 * $numero1;
        echo "la division entera de numero2 / numero1 es";
        echo "el resto de la division de numero2 % numero1 es";
        echo "<br>";
    } else {
        echo "Los numeros ingresados son iguales";
    }
        ?>
</body>
</html>