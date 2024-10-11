<?php

function generarResumen($texto, $limite){
    if (strlen($texto)>$limite) {
        $frase = substr($texto,0,$limite);
        echo '...';

        return $frase;
    }
    else{
        return $texto;
    }
}

generarResumen("textoooooo", 5)

?>