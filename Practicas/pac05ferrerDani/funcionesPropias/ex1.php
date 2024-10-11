<?php
//Generar saludo personalizado


function generarSaludo($nombre){
   $frase =  "<h1>Hola {$nombre} cómo estás?</h1>";

    return ($frase);
}

echo generarSaludo("Dani");



?>