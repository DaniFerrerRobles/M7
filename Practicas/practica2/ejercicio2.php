<?php

echo "<h1> EJERCICIO 2</h1>";

echo "<div style='display:flex;'>";

for ($numeroTabla = 1; $numeroTabla <= 11  ; $numeroTabla ++) {

    echo "<div style='background-color:orange; margin: 10px; padding: 15px;'>";
    for ($numero = 1; $numero <= 10 ; $numero ++) {
        $resultado = $numeroTabla * $numero;

        echo "<div>" . $numero . " X " . $numeroTabla . " = " . $resultado . "</div>";
    }

    echo "</div>";

}

echo "</div>";

?>