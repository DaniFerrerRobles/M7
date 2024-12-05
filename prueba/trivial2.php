<?php

session_start();

if (isset($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
}

include 'data.php';

$message = "";

$pregunta = $preguntas[1]['pregunta'];
$respuesta = $preguntas[1]['respuesta'];

if (isset($_POST['answer'])) {
    if ($_POST['answer'] == $respuesta) {
        $message = "¡BIEN!";
        header("Location: trivial3.php");
        exit(); 
    } else {
        $message = "¡MAL! Intenta de nuevo.";
        header("Location: trivial2.php");
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Trivial 2</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <header>
        <h3>Bienvenido <?php echo $_SESSION['username']; ?></h3>
    </header>
    <div class="card p-4" style="width: 22rem;">
        <h2 class="card-title text-center">Trivial 2</h2>

        <form method="POST">
            <div class="mb-3">
                <label for="question"><?php echo $pregunta; ?></label>
                <input type="text" name="answer" class="form-control" required placeholder="Respuesta">
            </div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>

        <div class="mt-3 text-center">
            <h4><?php echo $message; ?></h4>
        </div>
    </div>
</body>
</html>