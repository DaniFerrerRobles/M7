<?php
session_start();

include 'personajes.php';

if (isset($_POST['nombre'], $_POST['rol'], $_POST['dificultad'], $_POST['especialidad'], $_POST['fuerza'], $_POST['img'])) {
    agregarPersonaje($_POST['img'], $_POST['nombre'], $_POST['rol'], $_POST['dificultad'], $_POST['especialidad'], $_POST['fuerza']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personaje</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h3>Agregar nuevo personaje</h3>

<form method="POST">
    <label for="img">Imagen:</label><br>
    <input type="text" name="img"><br><br>

    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label for="rol">Rol:</label><br>
    <input type="text" name="rol"><br><br>

    <label for="dificultad">Dificultad:</label><br>
    <input type="text" name="dificultad"><br><br>

    <label for="especialidad">Especialidad:</label><br>
    <input type="text" name="especialidad"><br><br>

    <label for="fuerza">Fuerza:</label><br>
    <input type="text" name="fuerza"><br><br>

    <input type="submit" value="Agregar Personaje">
</form>

</body>
</html>