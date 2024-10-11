<?php

function eliminarEspacios($texto){
    return trim($texto);
}

$texto = "dani            ferrer robles";

echo eliminarEspacios($texto)

?>