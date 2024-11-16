<?php

session_start();

require_once 'add_edit_book.php';

function agregarLibro(){
    $libroNuevo = [
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'anio' => $_POST['anio'],
        'img' => $_POST['img'],
    ];
    
    $_SESSION['libros'][] = $libroNuevo;
    
    header('Location: home.php');
    exit();    
}