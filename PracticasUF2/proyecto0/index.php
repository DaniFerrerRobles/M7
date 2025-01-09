<?php
session_start();
include 'libro.php';
include 'biblioteca.php';

if (!isset($_SESSION['biblioteca'])) {
    $_SESSION['biblioteca'] = serialize(new Biblioteca());
}

$biblioteca = unserialize($_SESSION['biblioteca']);

if (isset($_POST['afegir'])) {
    $titol = $_POST['titol'];
    $autor = $_POST['autor'];
    $anyPublicacio = $_POST['anyPublicacio'];
    $foto = $_POST['foto'];

    $llibreDelUsuario = new Llibre($titol, $autor, $anyPublicacio, $foto);
    $biblioteca->afegirLlibre($llibreDelUsuario);

    $_SESSION['biblioteca'] = serialize($biblioteca);

} elseif (isset($_POST['cercar'])) {
    $titolCercar = $_POST['titolCercar'];
    $resultatBusqueda = $biblioteca->cercarLlibrePelTitol($titolCercar); 

    foreach ($resultatBusqueda as $llibre) {
        echo $llibre;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gestió de Llibres</title>
</head>
<body class="container py-5">
    <h1 class="text-center mb-5">Gestió de Llibres</h1>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2>Afegir Llibre</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="titol" class="form-label">Títol</label>
                            <input type="text" id="titol" name="titol" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="autor" class="form-label">Autor</label>
                            <input type="text" id="autor" name="autor" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="anyPublicacio" class="form-label">Any de Publicació</label>
                            <input type="number" id="anyPublicacio" name="anyPublicacio" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">URL de la Imatge</label>
                            <input type="url" id="foto" name="foto" class="form-control" required>
                        </div>
                        <button type="submit" name="afegir" class="btn btn-primary w-100">Afegir Llibre</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2>Cercar Llibre</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="titolCercar" class="form-label">Títol</label>
                            <input type="text" id="titolCercar" name="titolCercar" class="form-control" required>
                        </div>
                        <button type="submit" name="cercar" class="btn btn-secondary w-100">Cercar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-5">Biblioteca</h2>
    <div class="row">
        <?php 
        foreach ($biblioteca->mostrarLlibres() as $llibre) { 
            echo $llibre;
        }
        ?>
    </div>
</body>
</html>
