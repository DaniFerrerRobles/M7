<?php

session_start();

include 'data.php';


if(!isset($_SESSION['preguntas'])){
    $_SESSION['preguntas'] = $preguntas;
   
} 

function agregarPreguntas($pregunta, $respuesta){

    $preguntaNueva = [
        'pregunta' => $pregunta,
        'respuestaa' => $respuesta,
    ];
    
    array_push($_SESSION['preguntas'],$preguntaNueva); 
}

function eliminarPregunta($id) {
    if (isset($_SESSION['pregunta'][$id])) {
        unset($_SESSION['preguntas'][$id]);
    }
}

?>