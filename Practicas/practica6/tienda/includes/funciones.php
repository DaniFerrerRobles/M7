        <?php
        

        function generarTablaProductos($productos) {
            echo '<table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Categoria</th>

                </tr>
            </thead>
            <tbody>';
            foreach ($productos as $producto) {
                echo '<tr>
                        <td>' . ucfirst($producto['nombre']) . '</td>
                        <td>' . number_format($producto['precio']) . '</td>',
                        $producto['disponible'] ? '<td>EN STOCK</td>' : '<td class="bg-danger">AGOTADO</td>',
                        '<td>' . $producto['categoria'] . '</td>',


                      '</tr>';
            }   
            echo '</tbody>
                </table>';
        }
        


        function muestraInfoContacto($nombre, $telefono, $foto){

           

            echo '
                <p>Tu nombre es' . $nombre . '</p>',

                '<p>Tu telefono es' . $telefono . '</p>',
                
                '<img src=' . $foto . 'alt="img" width="500" height="600">
            ';
        }

       

       

?>
    