<?php

function contarElementos($array){
return count($array);
}

$array = [1,2,3,4,5];

$numTotal= contarElementos($array);

echo($numTotal);
?>