<?php

function ordenarArrayAlfabetico($nombres){
    return sort($nombres);
}

$nombres = ["Mónica", "Ivan", "Alba"];

$orden= ordenarArrayAlfabetico($nombres);

var_dump($orden);
?>