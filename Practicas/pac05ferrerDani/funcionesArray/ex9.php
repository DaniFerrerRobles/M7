<?php

function combinarArrays($array1, $array2){
return array_merge($array1, $array2);
}

$array1 = [1,2,3];
$array2 = [4,5,6];

$arrayCombinado= combinarArrays($array1, $array2);

var_dump($arrayCombinado);
?>