<?php
session_start();

// Datos de usuario predefinidos (esto normalmente se obtendría de una base de datos).
$usuarios = [
    ["nombre" => "admin", "contrasenya" => "1234", "rol" => "admin"]
];

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["nombre"];
    $contrasenyaUsuario = $_POST["contrasenya"];
    $foto = $_POST["foto"];

    foreach ($usuarios as $usuario) {
        if ($nombreUsuario == $usuario['nombre'] && $contrasenyaUsuario == $usuario['contrasenya']) {
            $_SESSION['username'] = $nombreUsuario;
            $_SESSION['role'] = $usuario['rol'];
            $_SESSION['photo'] = $foto;
            header("Location: bienvenida.php");
            exit;
        }
    }

    $error = "Usuario o contraseña incorrectos.";
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="style.css"> <!-- Usa el archivo de estilo que acompaña a la estructura de HTML proporcionada -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <section>
        <?php for ($i = 0; $i < 180; $i++): ?>
            <span></span>
        <?php endfor; ?>

        <!-- Sección de inicio de sesión -->
        <div class="signin">
            <div class="content text-center">
                <h2>Inicia sesión</h2>
                <form method="POST" >
                    <div class="inputBox ">
                        <input class="p-2 m-2" placeholder="Nombre de usuario" type="text" name="nombre" required>
                       
                    </div>
                    <div class="inputBox ">
                        <input class="p-2 m-2" placeholder="Contraseña" type="password" name="contrasenya" required>
                       
                    </div>
                    <div class="inputBox ">
                        <input class="p-2 m-2" placeholder="Foto de perfil" type="text" name="foto" required>
                       
                    </div>

                    
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>
                    
                    <div class="inputBox">
                        <input class="bg-warning btn mt-2" type="submit" value="Iniciar">
                    </div>
                </form>
            </div>
        </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>