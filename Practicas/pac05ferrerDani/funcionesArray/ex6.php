<?php

function obtenerMaximo($numeros){
return max($numeros);
}

$numeros = [1,2,3,4,5,20,15,30,25];

$valorMax= obtenerMaximo($numeros);

echo($valorMax);
?>