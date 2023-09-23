<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario= "television";
$ckpass = 51284;

if ($usuario==$ckusuario && $contrasenia==$ckpass) {
    header("location:https://www.acordesdcanciones.com/");
} else {
    echo "Incorrecto";
    header ("location:https://www.spotify.com/es/error/");
}
