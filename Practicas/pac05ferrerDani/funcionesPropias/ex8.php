<?php

function calcularDescuento($precioOriginal,$descuento){
    $resul =  $descuento/100;
    $total = $precioOriginal * $resul;
    return $total;
}

calcularDescuento(100, 50)

?>