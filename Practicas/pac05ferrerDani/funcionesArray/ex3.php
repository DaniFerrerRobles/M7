<?php

function filtrarMayores($numeros, $valor){
    return array_filter($numeros,$valor);
}

$nombres = [1,2,3,4];
$valor = 2;

$numerosMayores= filtrarMayores($numeros, $valor);

var_dump($numerosMayores);
?>