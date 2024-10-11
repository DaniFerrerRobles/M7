<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>
<body>
    <form action="">
        <label for="nombre">Nombre: </label><br>
        <input type="text" id="nombre" name="nombre"><br>
       
       <?php
$nombre="isset($nombre) ? $nombre = $nombre : $nombre 'Ingrese su nombre'";

echo $nombre
        ?> 
    </form>
    
</body>
</html>




