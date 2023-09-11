<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <h1>1. Hola Mundo</h1>
    <?php
    $saludo = "2. Hola Mundo";
    echo $saludo;
    $a = 9;
    $b = 8;
    $c = 40;
    $d = 1.8;
    $e = 32;
    $g = 18;
    $i = 12;
    $j = 30;
    $k = 3.14;
    ?>
    <br>
<?php
$saludo = "3. la suma de a y b es";
echo $saludo;
    $total = $a + $b;
    echo $total;
?>
<br>
<?php
$saludo = "3. la resta de a y b es";
echo $saludo;
    $total = $a - $b;
    echo $total;
    ?>
<br>

    <?php
    $saludo = "3. la multiplicacion de a y b es";
    echo $saludo;
    $total = $a * $b;
    echo $total;

    ?>
    <br>

    <?php
    $saludo = "3. la division de a y b es";
    echo $saludo;
    $total = $a / $b;
    echo $total;

    ?>
    <br>

    <?php
    $saludo = "3. el resto de a y b es";
    echo $saludo;
    $total = $a % $b;
    echo $total;

    ?>
    <br>
    <?php
    $saludo = "4. la formula es f = (c * d) + e=";
    echo $saludo;
    $total = $c * $d + $e;
    echo $total;
?>
<br>
<?php
$saludo = "5a. el perimetro de un rectangulo es p = g + g + i + i=";
echo $saludo;
$total = $g + $g + $i + $i;
echo $total;
?>
<br>
<?php
$saludo = "5a. el area de un rectangulo es area = g * i=";
echo $saludo;
$total = $g * $i;
echo $total;
?>
<br>
<?php
$saludo = "5b. el perimetro de un circulo es p = 2 * k * j=";
echo $saludo;
$total = 2 * $k * $j;
echo $total;
?>
<br>
<?php
$saludo = "5b. el area de un circulo es A = k * j * j=";
echo $saludo;
$total = $k * $j * $j;
echo $total;
?>
    </body>
</html>