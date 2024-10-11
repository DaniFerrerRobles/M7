<?php

function contarOcurrencias($texto, $palabra){
    return substr_count($texto, $palabra);
}

$texto = "dani ferrer robles robles robles";
$palabra = "robles";

echo contarOcurrencias($texto, $palabra)
?>