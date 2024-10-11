<?php
//Calcular el precio total de un producto


function calcularTotal($precio, $cantidad, $inpuesto){
   $resul = $precio + $cantidad;
   $total = $inpuesto / 100 * $resul;

    return ($total);
}

echo generarSaludo(10, 20, 4);



?>