

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
<?php

include 'lista.php';
foreach ($personas as $persona){
    echo '
    
        <div class="col w-25 m-4">
        <div class="card shadow-sm">
        <h1>' . ($persona['nombre']) . '</h1>
        <img class="bd-placeholder-img card-img-top" width="100%" height="225" 
            src=" '. ($persona['imagen']) . '"
        >

        <div class="card-body">
       <a href="ficha.php?nombre=' . ($persona['nombre']) .'">Más info</a>
        </div>
        </div>
    </div>';
}

?>

</body>
</html>