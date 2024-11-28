<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA EXAMEN</title>
</head>
<body>
    <?php require_once 'header.php'?>
</body>
</html>

    <form method="POST" action="">
        <label for="nombre">Introduce tu nombre completo:</label>
        <input type="text" id="nombre" name="nombre">
      
        <input type="submit" value="Enviar">
    </form>

    <?php

        if(isset($_POST['nombre'])){
            $_SESSION['nombre'] = $_POST['nombre'];
            
        }

        if (isset($_SESSION['nombre'])) {
            header('Location: inicio.php');
            exit();
        }


    ?>
</body>
</html>