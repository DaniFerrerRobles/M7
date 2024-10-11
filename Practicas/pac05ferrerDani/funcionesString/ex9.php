<?php

function dividirPalabras($texto){
    return explode(" ", $texto);
}

$texto = "dani ferrer robles";

$array = dividirPalabras($texto);

var_dump($array);
?>