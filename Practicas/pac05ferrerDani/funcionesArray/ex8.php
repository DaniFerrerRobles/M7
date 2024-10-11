<?php

function eliminarDuplicados($array){
return array_unique($array);
}

$array = [2,3,4,5,20,20,20,15,30,25,1];

$sinRepetidos= eliminarDuplicados($array);

var_dump($sinRepetidos);
?>