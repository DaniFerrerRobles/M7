<?php

function sumarArray($numeros){
    return array_sum($numeros);
}

$numeros = [1,2,3,4];

$total= sumarArray($numeros);

echo $total;
?>