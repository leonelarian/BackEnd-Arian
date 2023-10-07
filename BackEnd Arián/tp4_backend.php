<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

<?php
print "<p>Ejercicio 1</p>\n";
$numerospares = [2,4,6,8,10,12,14,16,18,20];

print ($numerospares[0]);
print "<pre>\n";
print ($numerospares[1]);
print "<pre>\n";
print ($numerospares[2]);
print "<pre>\n";
print ($numerospares[3]);
print "<pre>\n";
print ($numerospares[4]);
print "<pre>\n";
print ($numerospares[5]);
print "<pre>\n";
print ($numerospares[6]);
print "<pre>\n";
print ($numerospares[7]);
print "<pre>\n";
print ($numerospares[8]);
print "<pre>\n";
print ($numerospares[9]);
print "<pre>\n";

?>

<?php
print "<p>Ejercicio 2</p>\n";
$valores = ["Pedro", "Ana", "34", "1"];
print "<pre>\n";
print_r($valores);
print "<pre>\n";
foreach ($valores as $valor) {
    print "<p>$valor</p>\n";
}
print "<p>Final</p>\n";
?>

<br>
<br>
<br>

<?php
print "<p>Ejercicio 3</p>\n";
$persona = [
    "Nombre: Pedro",
    "Apellido: Torres", 
    "Direccion: Av. Mayor 3703",
    "Telefono: 1122334455"];
print ($persona[0]);
print "<pre>\n";
print ($persona[1]);
print "<pre>\n";
print ($persona[2]);
print "<pre>\n";
print ($persona[3]);
print "<pre>\n";

?>

<?php
print "<p>Ejercicio 4</p>\n";
$nombreArreglo=["Madrid","Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
$i=0;
foreach ($nombreArreglo as $i => $valor) {
    print "<p>la ciudad con el indice $i tiene el nombre $valor.</p>\n";
$i++;
} 
?>
<?php
print "<p>Ejercicio 5</p>\n";
$i=0;
$nombreArreglo=[
        "MD"=>"Madrid",
        "BCL"=>"Barcelona",
        "LD"=>"Londres",
        "NY"=>"New York",
        "LA"=>"Los Ángeles",
        "CCG"=>"Chicago",
];
foreach ($nombreArreglo as $i => $valor) {
    print "<p>El indice de $valor es $i.</p>\n";
$i++;
} 
?>
    </body>
</html>