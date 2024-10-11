<?php

function dividirArray($array, $tamanio){
return array_chunk($array, $tamanio);
}

$array = [1,2,3,4,5];
$tamanio = 3;

$arrayFragmentado= dividirArray($array, $tamanio);

var_dump($arrayFragmentado);
?>