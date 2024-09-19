<?php

echo "<h1> EJERCICIO 3</h1>";

$numeroAleatorio = rand(0, 100);

if ($numeroAleatorio % 2 == 0) {
    echo $numeroAleatorio . " SI es par ";
}
else {
    echo $numeroAleatorio . " NO es par";
}

?>