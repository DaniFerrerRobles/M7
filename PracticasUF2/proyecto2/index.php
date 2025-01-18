<?php
include 'baraja.class.php';

if (isset($_POST)) {
    $numeroDeJugadors = $_POST['numJugadors'];
    $numeroDeCartes = $_POST['numCartes'];
}

$baraja = new Baraja();

$baraja->crea_baraja();
$baraja->mezcla_baraja();

$baraja->pinta_baraja();

for ($jugador = 0; $jugador <= $numeroDeJugadors; $jugador++) {
    $jugadores[$jugador] = array_splice($baraja->conjunto_cartas, 0, $numeroDeCartes);
}

$cartaInicial = array_shift($baraja->conjunto_cartas);
echo "<p>Carta sobre la mesa: <img src='cartas_uno/" . $cartaInicial->numeroCarta . "_" 
    . $cartaInicial->coloroTipoCarta . ".png' alt='Carta inicial' /></p>";

    foreach ($jugadores as $identificadorDelJugador => $manoDelJugador) {
        echo "<h3>Jugador " . $identificadorDelJugador + 1 . ":</h3>";
        
        foreach ($manoDelJugador as $carta) {
            echo "<img src='cartas_uno/" . $carta->numero . "_"
                . $carta->color . ".png' alt='Carta' style='width: 100px; margin: 5px;'/>";
        }
    }    
?>