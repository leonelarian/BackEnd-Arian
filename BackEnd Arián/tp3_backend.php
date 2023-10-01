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
$i = 1;
$acum=0;
while ($i <= 20) {
    $acum+=$i;
    $i++;
}
print "El valor total acumulado es: ".$acum;
?>

<?php
print "<p>Ejercicio 6</p>\n";
$i=1;
$acum=0;
while ($i <= 20) {
    if ($i%2==0) {
        $acum+=$i;
        
   
    }
    $i++; 
}
print "El valor total acumulado de números pares es: ".$acum;
?>
</body>
</html>