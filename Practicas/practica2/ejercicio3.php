<?php

echo "<h1> EJERCICIO 3</h1>";

$numeroAleatorio = rand(0, 100);

if ($numeroAleatorio % 2 == 0) {
    echo "<div style='background-color:orange'>{$numeroAleatorio} SI es par </div>";
}
else {
    echo "<div style='background-color:yellow'>{$numeroAleatorio} NO es par </div>";
}

?>