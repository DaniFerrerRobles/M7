<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: registro.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Encabezado del usuario -->
    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="<?php echo $_SESSION['photo']; ?>" alt="Foto de perfil" class="w-25 rounded-circle me-3">
                <div>
                    <h4 class="m-0">Bienvenido, <?php echo $_SESSION['username']; ?>!</h4>
                    <h4 class="m-0">TU ROL ES: <?php echo $_SESSION['role']; ?></h4>
                </div>
            </div>
            <a href="salir.php" class="btn btn-warning btn-sm">
                Cerrar sesión❌
            </a>
        </div>
    </header>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>