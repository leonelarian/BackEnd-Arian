<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <h1>Ejercicio 1</h1>
<?php
$i=1;
do {
    print "<p>$i</p>\n";
    $i++;
} while ($i <= 100);
?>

<h2>Ejercicio 2</h2>
<?php
$i=100;
do {
    print "<p>$i</p>\n";
    $i--;
} while ($i > 0);
?>

<?php
print "<p>Ejercicio 3</p>\n";
for ($i = 0; $i <= 100; $i++) {
    if($i%2 == 0){
        print "<p>$i</p>\n";
    }
};
?>

<?php
print "<p>Ejercicio 4</p>\n";
for ($i = 0; $i <= 100 ; $i++) {
    if($i%2 == 1){
        print "<p>$i</p>\n";
    }
};
?>

<?php
print "<p>Ejercicio 5</p>\n";
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    $suma = ($suma + $i);
    print "<p>$suma</p>\n";
}
print "El valor total acumulado de números pares es: ".$suma;
?>

<?php
print "<p>Ejercicio 6</p>\n";
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    if($i%2 == 0)
    $suma = ($suma + $i);
    print "<p>$suma</p>\n";

}
print "El valor total acumulado de números pares es: ".$suma;
?>
</body>
</html>