<?php

include "lista.php";



foreach ($personas as $persona) {
$nom = $_GET['nombre'];

if ($nom==$persona['nombre']) {

    echo '
    
        <div class="col">
        <div class="card shadow-sm">
        <img class="bd-placeholder-img card-img-top" width="150px" height="225" 
            src=" '. ($persona['imagen']) . '"
        >

        <div class="card-body">
       <p>Telefono:' .  $persona['telefono'] . '</p>
        <p>Correo:' .  $persona['correo'] . '</p>
        <p>Edad:' .  $persona['edad'] . '</p>      
        <p>Profesión:' .  $persona['profesion'] . '</p>



        </div>
        </div>
    </div>';

}







}









?>