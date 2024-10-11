<?php

function reemplazarPalabras($texto, $buscar,$reemplazar){
    return str_replace($texto,$buscar,$reemplazar);
}

$texto = "dani ferrer robles";

echo reemplazarPalabras($texto, "ferrer", "patata")
?>