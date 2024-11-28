<?php

session_start();

$productos = [
    [
        "nombre" => "Camiseta",
        "precio" => 20,
        "descripcion" => "Camiseta de algodón, disponible en varios colores y tamaños."
    ],
    [
        "nombre" => "Zapatos deportivos",
        "precio" => 50,
        "descripcion" => "Zapatos cómodos y resistentes, ideales para hacer deporte o para el uso diario."
    ],
    [
        "nombre" => "Reloj inteligente",
        "precio" => 200,
        "descripcion" => "Reloj con funciones de monitorización de salud, notificaciones y GPS."
    ],
    [
        "nombre" => "Auriculares inalámbricos",
        "precio" => 90,
        "descripcion" => "Auriculares bluetooth con excelente calidad de sonido y autonomía de 20 horas."
    ],
    [
        "nombre" => "Mochila para laptop",
        "precio" => 40,
        "descripcion" => "Mochila resistente con compartimentos especiales para laptop y accesorios."
    ]
];

foreach ($productos as $producto) {
    echo "Nombre: " . $producto["nombre"] . "<br>";
    echo "Precio: $" . $producto["precio"] . "<br>";
    echo "Descripción: " . $producto["descripcion"] . "<br><br>";
}




if(!isset($_SESSION['productos'])){
    $_SESSION['productos'] = $productos;
   
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



function editarLibro($id, $nombre, $precio, $descripcion) {
    if (isset($_SESSION['productos'][$id])) {
        $_SESSION['productos'][$id] = [
            "id"=>$id,
            "nombre" => $nombre,
            "precio" => $precio,
            "descripcion" => $descripcion,
        ]; 
    }
}


function eliminarLibro($id) {
    if (isset($_SESSION['productos'][$id])) {
        unset($_SESSION['productos'][$id]); 

    }
}

?>