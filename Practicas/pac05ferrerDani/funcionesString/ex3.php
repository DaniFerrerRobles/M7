<?php

function obtenerSubcadena($texto, $inicio, $longitud){
    return substr($texto,$inicio,$longitud);
}

$texto = "dani ferrer robles";

echo obtenerSubcadena($texto, 3, 7)
?>