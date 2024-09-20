<?php

echo "<h1> EJERCICIO 1</h1>";

echo "<div style='display:flex; flex-wrap:wrap; gap: 20px;'>";


for ($numero=50; $numero <=500 ; $numero ++) {
    if ($numero%2==0) {
        echo "<div style='background-color:orange; padding:20px;'> {$numero} </div>";
    }
    
}
echo "</div>";

?>