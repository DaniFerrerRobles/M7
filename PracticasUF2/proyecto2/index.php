<?php
include 'baraja.class.php';

if (isset($_POST)) {
    $numeroDeJugadors = $_POST['numJugadors'];
    $numeroDeCartes = $_POST['numCartes'];
}

$baraja = new Baraja();

$cartaDelJugador = new Carta($coloroTipoCarta, $numeroCarta, $idCarta);

$cartaInicial = new Carta($coloroTipoCarta, $numeroCarta, $idCarta);

$baraja->crea_baraja();

$baraja->mezcla_baraja();

$baraja->pinta_baraja();

for ($jugador = 1; $jugador <= $numeroDeJugadors; $jugador++) {
    $jugadores[$jugador] = array_splice($baraja->conjunto_cartas, 0, $numeroDeCartes);
}

$cartaInicial = array_shift($baraja->conjunto_cartas);
echo "<p>Carta sobre la mesa: <img src='cartas_uno/" . $cartaInicial->numeroCarta . "_" 
    . $cartaInicial->coloroTipoCarta . ".png' alt='Carta inicial' /></p>";

    foreach ($jugadores as $jugador => $cartasDelJugador) {
        echo "<h3>Jugador " . ($jugador) . ":</h3>";
        
        foreach ($cartasDelJugador as $cartaDelJugador) {
            $cartaDelJugador->pinta_carta();
        }
    }    
?>