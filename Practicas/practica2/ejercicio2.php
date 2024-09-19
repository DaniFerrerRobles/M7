<?php

echo "<h1> EJERCICIO 2</h1>";

for ($numeroTabla = 1; $numeroTabla <= 11  ; $numeroTabla ++) {
    for ($numero = 1; $numero <= 10 ; $numero ++) {
        $resultado = $numeroTabla * $numero;

        echo "<div>" . $numeroTabla . " X " . $numero . " = " . $resultado . "</div>";
    }
}

?>