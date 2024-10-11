<?php

function calcularEdad($anioNacimiento){
    $anioActual = date("Y");

    $edad = $anioActual - $anioNacimiento;

    return $edad;
}

calcularEdad(2002)

?>