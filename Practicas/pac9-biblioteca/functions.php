<?php

session_start();

// Lista de libros
$libros = [
    [
        'id' => 0,
        'titulo' => 'Don Quijote de la Mancha',
        'autor' => 'Miguel de Cervantes',
        'anio' => 1605,
        'img' => 'https://www.marcialpons.es/media/img/portadas/2023/4/18/9788408270881jfif'
    ],
    [
        'id' => 1,
        'titulo' => 'La sombra del viento',
        'autor' => 'Carlos Ruiz Zafón',
        'anio' => 2001,
        'img' => 'https://www.isliada.org/static/images/2018/09/La-sombra-del-viento.jpg'
    ],
    [
        'id' => 2,
        'titulo' => 'Cien años de soledad',
        'autor' => 'Gabriel García Márquez',
        'anio' => 1967,
        'img' => 'https://th.bing.com/th/id/R.b914bed567ef08c11a012c3f40dc8820?rik=gPlclO%2b%2bwpfvng&pid=ImgRaw&r=0'
    ]
];


if(!isset($_SESSION['libros'])){
    $_SESSION['libros'] = $libros;
   
} 

function agregarLibro($titulo, $autor, $anio, $img){

    $id = count($_SESSION['libros']);

    $libroNuevo = [
        'id' => $id,
        'titulo' => $titulo,
        'autor' => $autor,
        'anio' => $anio,
        'img' => $img,
    ];
    
    array_push($_SESSION['libros'],$libroNuevo);

    header('Location: home.php');  
}



function editarLibro($id, $titulo, $autor, $anio, $imagen) {
    if (isset($_SESSION['libros'][$id])) {
        $_SESSION['libros'][$id] = [
            "id"=>$id,
            "titulo" => $titulo,
            "autor" => $autor,
            "anio" => $anio,
            "imagen" => $imagen
        ];

        header('Location: home.php');  
    }
}


function eliminarLibro($id){
        array_splice($_SESSION['libros'], $id);

        }
    
