<?php
include 'baraja.class.php';
include 'carta.class.php';
include 'jugador.class.php';

class Partida {
    public $numeroDeJugadores;
    public $numeroDeCartas;
    public $turno = 0;
    public $baraja;
    public $cartaEnMesa;
    public $arrayJugadores = [];
    public $sentido;

    public function __construct($numeroDeJugadores, $numeroDeCartas) {
        $this->numeroDeJugadores = $numeroDeJugadores;
        $this->numeroDeCartas = $numeroDeCartas;
        $baraja = new Baraja();

        $baraja->crea_baraja();
        $baraja->mezcla_baraja();

        for ($jugador = 1; $jugador <= $numeroDeJugadores; $jugador++) {
            $arrayJugadores[$jugador] = array_splice($baraja->conjunto_cartas, 0, $numeroDeCartas);
        }

        $cartaEnMesa = array_shift($this->baraja->conjunto_cartas);
        echo "<p>Carta sobre la mesa:</p>";
        $cartaEnMesa->pinta_carta();
    }

    public function jugar() {
        $jugadorActual = $arrayJugadores[$turno];
        $manoActual = $jugadorActual->mano;

        foreach ($manoActual as $carta) {
            if ($this->es_jugada_valida($carta)) {
                $carta_jugada = $carta;
                $jugadorActual->eliminar_carta($carta);
                $this->cartaEnMesa = $carta;
                echo "<p>El jugador " . ($this->turno + 1) . " jugó:</p>";
                $carta->pinta_carta();
                break;
            }
        }

        // Si no puede jugar, roba una carta
        if (!$carta_jugada) {
            $nuevaCartaRobada = array_shift($baraja->conjunto_cartas);
            $jugadorActual->afegir_carta($nuevaCartaRobada);
        }

        if (count($jugadorActual->cartas) == 0) {
            echo "El jugador " . $jugadorActual . " ha ganado";
        }
    }
}
?>