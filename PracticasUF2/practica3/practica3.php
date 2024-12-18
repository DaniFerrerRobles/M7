<?php
session_start();

include 'personajes.php';

$personajes = $_SESSION['personajes'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personajes LOL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Personajes LOL</h1>
        </div>

        <a href="salir.php" class="btn btn-warning btn-sm">
                Cerrar sesión
            </a>

        <?php 
            echo '
            <div class="text-center mb-4">
                <a href="addPersonaje.php" class="btn btn-outline-success btn-lg">
                    <i class="fas fa-plus-circle me-2"></i>Agregar Nuevo Personaje
                </a>
            </div>';
        ?>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php 
            foreach ($personajes as $personaje) {
                echo '
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <!-- Si el personaje tiene una imagen, la mostramos -->
                        <img src="' . $personaje['img'] . '" class="card-img-top" alt="Imagen de personaje" style="height: 400px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">' . $personaje['nombre'] . '</h5>
                            <p class="card-text"><strong>Rol:</strong> ' . $personaje['rol'] . '</p>
                            <p class="card-text"><strong>Dificultad:</strong> ' . $personaje['dificultad'] . '</p>
                            <p class="card-text"><strong>Especialidad:</strong> ' . $personaje['especialidad'] . '</p>
                            <p class="card-text"><strong>Fuerza:</strong> ' . $personaje['fuerza'] . '</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
