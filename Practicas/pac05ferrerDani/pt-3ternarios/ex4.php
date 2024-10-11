<?php

$idioma = "es";

 $mensaje = $idioma == "es" ? 'HOLA' : '.';

$mensaje = $idioma == "en" ? 'HELLO' :  '.';

echo '<h2>' . $mensaje . '</h2>';
?>