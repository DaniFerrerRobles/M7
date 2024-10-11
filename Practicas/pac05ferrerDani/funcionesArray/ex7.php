<?php

function obtenerMinimo($numeros){
return min($numeros);
}

$numeros = [2,3,4,5,20,15,30,25,1];

$valorMin= obtenerMinimo($numeros);

echo($valorMin);
?>