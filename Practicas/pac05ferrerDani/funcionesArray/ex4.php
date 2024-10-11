<?php

function buscarEnArray($numeros, $valor){
    if(in_array($numeros,$valor)){
        return true;
    }
    else{
        return false;
    }
}

$nombres = [1,2,3,4];
$valor = 4;

$buscar= buscarEnArray($numeros, $valor);

var_dump($buscar);
?>