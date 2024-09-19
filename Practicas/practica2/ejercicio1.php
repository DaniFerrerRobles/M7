<?php

echo "<h1> EJERCICIO 1</h1>";

for ($numero=50; $numero <=500 ; $numero ++) {
    if ($numero%2==0) {
        echo "<div> El " . $numero . " SI es par </div>";
    }
    else {
        echo "<div> El " . $numero . " NO es par </div>";
    }
}

?>