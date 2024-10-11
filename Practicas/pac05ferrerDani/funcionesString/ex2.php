<?php

function contarPalabras($texto){
    return str_word_count($texto);
}

$texto = "dani ferrer robles";

echo contarPalabras($texto)
?>