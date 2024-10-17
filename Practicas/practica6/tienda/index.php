<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Mercadona productos /title>
 <link
href="https: /cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
</head>
 <body>

<?php include "header.php" ?>

<?php include "funciones.php"?>

<?php muestraInfoContacto($nombre, $telefono, $foto)?>

<div class="container">
<div>
<h2>Productos disponibles /h2>

<?php generarTablaProductos($productos)?>

</div>

- aqui incluye los datos de contacto del cliente con un toast live -->
 - Button trigger modal -->

<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-
target="#staticBackdrop">
<?php muestraInfoContacto($nombre, $telefono, $foto)?>
</button>

 - Modal que al clicar aparece info de contacto-->

 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-
keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-
hidden="true">

 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="staticBackdropLabel">Información de
contacto /h5>

 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-
label="Close"> </button>

</div>
<div class="modal-body">

 <?php muestraInfoContacto($nombre, $telefono, $foto)?>

</div>
</div>
</div>
 </div>

 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <?php include "productos.php"?>
</div>
    <?php include "footer.php"?>
</div>

<script
src="https: /cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-
ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"> </script>
</body>
</html>