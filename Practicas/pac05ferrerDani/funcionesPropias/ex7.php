<?php

function generarEnlaceDescarga($archivo){
    $link = '<a href="' . $archivo . '">Descargar</a>';
    echo $link;
    return $link;
}

generarEnlaceDescarga("ex1.php")

?>