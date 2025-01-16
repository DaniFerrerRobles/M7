<?php
include 'baraja.class.php';

if (isset($_POST)) {
    $numeroDeJugadors = $_POST['numJugadors'];
    $numeroDeCartes = $_POST['numCartes'];
}

$baraja = new Baraja();

$baraja->crea_baraja();

$baraja->mezcla();


foreach ($baraja->conjunto_cartas as $carta) {
    $carta->pinta_carta();
}
var_dump($baraja->conjunto_cartas);



// for ($jugador = 0; $jugador < $numeroDeJugadors; $jugador++) {
//     $jugadores[] = array_splice($baraja->conjunto_cartas, 0, $numeroDeCartes);

//     echo "<p>Carta sobre la taula: <img src='cartas_uno/" . $baraja->conjunto_cartas[$Jugadores]->numeroCarta . "_"
//     . $baraja->conjunto_cartas[$jugadores]->coloroTipoCarta . ".png' alt='Carta' /></p>";
// }

// foreach ($jugadores as $jugador) {
//     echo "<h3>Jugador " . ($jugador + 1) . ":</h3>";

// }

?>