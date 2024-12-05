<?php
session_start();

$usuarios = [
    ["nombre" => "Juan", "contrasenya" => "1234", "rol" => "admin"],
    ["nombre" => "Miguel", "contrasenya" => "5678", "rol" => "jugador"]
];

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["nombre"];
    $contrasenyaUsuario = $_POST["contrasenya"];

    foreach ($usuarios as $usuario) {
        if ($nombreUsuario == $usuario['nombre'] && $contrasenyaUsuario == $usuario['contrasenya']) {
            $_SESSION['username'] = $nombreUsuario;
            $_SESSION['role'] = $usuario['rol'];
            if ($_SESSION['role'] =='admin'){
              header("Location: manage.php");
            exit;
            }
            else{
                header("Location: trivial1.php"); 
            }          
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
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <section>
        <?php for ($i = 0; $i < 180; $i++): ?>
            <span></span>
        <?php endfor; ?>

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