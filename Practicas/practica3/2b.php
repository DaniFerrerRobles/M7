<?php

$frutas = [
    
    [
      "nombre" => "manzana",
      "estado" => false,
      "imagen" =>  "https://www.frutality.es/wp-content/uploads/manzana-royal.png"
        ],

        [
            "nombre" => "Platano",
            "estado" => false,   
            "imagen" => "https://platanosruiz.com/wp-content/uploads/2023/02/platano-montaje.jpg   "
                 
        ],

        [
            "nombre" => "Naranja",
            "estado" => false,  
            "imagen" => "https://t3.gstatic.com/licensed-image?q=tbn:ANd9GcS_l2nKIkDzVLzxONc371GJWkhKWsk-uqTVFau7nskckDvQlqk4Ka2KytgbdCPDld-J"      
        ],

        [
            "nombre" => "Fresa",
            "estado" => false,
            "imagen" =>"https://medibangpaint.com/wp-content/uploads/2020/02/IMG_0408.jpg"
        ],

        [
            "nombre" => "Kiwi",
            "estado" => false,
            "imagen" => "https://imag.bonviveur.com/un-kiwi-entero-y-corte-transversal-de-un-kiwi.jpg"
        ],    
    ]
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Selecciona tu fruta favorita</h1>

        

        

<table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Fruta</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
    <?php
    foreach($frutas as $fruta) {
        echo '<tr class="">';
        echo '<td>' . $fruta['nombre'] . '</td>';
        // cuando coincida nombre , cambia el estado a true
        if($_GET['nomf'] == $fruta['nombre']){
            $fruta['estado'] = true;
        }


        if ($fruta['estado'] == true) {
            echo '<td class="bg-success">Seleccionada</td>';
        } else {
            echo '<td class="bg-danger">No seleccionada</td>';
        }

        echo '<td><a class="btn btn-primary" href="2b.php?nomf=' .($fruta['nombre']). '">Seleccionar</a></td>';
        echo '</tr>';
    }
    ?>
</tbody>

        </table>
        
        
         
        <!-- Mostrar tarjeta de la fruta seleccionada (actualmente estatica, siempre hay una manzana) -->
        <div class="card mt-4 w-25 shadow-lg">
        <?php
    foreach($frutas as $fruta){
        
                if ($fruta['estado'] == true) {
                    echo 'trueeeee'; 
                    echo '
                     <img src="'.$fruta['imagen'].'" class="card-img-top img-fluid" alt="fruta">
                    <div class="card-body bg-warning">
                        <h5 class="card-title">'. $fruta['nombre'] . '</h5>
                        <p class="card-text">¡Esta es tu fruta favorita!</p>
                    </div>  ' ;
        } 
    }
    ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!-- aqui tienes el emoji de SELECCIONADA ✔️ para copiarlo y usarlo en la práctica -->