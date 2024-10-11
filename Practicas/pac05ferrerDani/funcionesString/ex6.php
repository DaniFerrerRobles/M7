<?php

function compararStrings($cadena1, $cadena2){
   if (strcmp($cadena1, $cadena2)) {
    echo 'SI SON IGUALES';
    return true;
   }
   else{
    echo 'NO SON IGUALES';
    return false;
   }
}

$cadena1 = "dani";
$cadena2 = "ferrer";

 compararStrings($cadena1, $cadena2)
?>