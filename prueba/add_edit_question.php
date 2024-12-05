<?php
session_start();

if ($_SESSION['role'] != 'admin') {
    header("Location: home.php");
    exit();
}

include 'funciones.php';

if (isset($_POST['pregunta'], $_POST['respuesta'])) {
    agregarPreguntas($_POST['pregunta'], $_POST['respuesta']);
    $message = "Pregunta agregada correctamente!";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>P</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <form method="POST" class="mx-auto" style="max-width: 600px;">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Pregunta" required>
                <label for="pregunta">Pregunta</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="respuesta" name="respuesta" placeholder="Respuesta" required>
                <label for="respuesta">Respuesta</label>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Agregar Pregunta</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
