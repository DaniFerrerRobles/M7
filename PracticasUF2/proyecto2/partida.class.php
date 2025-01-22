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
        $this->baraja = new Baraja();

        // Crear y mezclar la baraja
        $this->baraja->crea_baraja();
        $this->baraja->mezcla_baraja();

        // Crear jugadores y repartir cartas
        for ($i = 0; $i < $numeroDeJugadores; $i++) {
            $jugador = new Jugador($i + 1); // Crear jugador con ID único
            for ($j = 0; $j < $numeroDeCartas; $j++) {
                $jugador->afegir_carta(array_shift($this->baraja->conjunto_cartas));
            }
            $this->arrayJugadores[] = $jugador;
        }

        // Establecer la carta inicial en la mesa
        $this->cartaEnMesa = array_shift($this->baraja->conjunto_cartas);
        echo "<p>Carta inicial sobre la mesa:</p>";
        $this->cartaEnMesa->pinta_carta();
    }

    public function jugar() {
        echo "<h2>Turno del jugador " . ($this->turno + 1) . ":</h2>";

        $jugador_actual = $this->arrayJugadores[$this->turno];
        $mano_actual = $jugador_actual->mano;

        // Buscar una carta válida para jugar
        $carta_jugada = null;
        foreach ($mano_actual as $index => $carta) {
            if ($this->es_jugada_valida($carta)) {
                $carta_jugada = $carta;
                $jugador_actual->eliminar_carta($carta);
                $this->cartaEnMesa = $carta;
                echo "<p>El jugador " . ($this->turno + 1) . " jugó:</p>";
                $carta->pinta_carta();
                break;
            }
        }

        // Si no puede jugar, roba una carta
        if (!$carta_jugada) {
            $nueva_carta = array_shift($this->baraja->conjunto_cartas);
            $jugador_actual->afegir_carta($nueva_carta);
            echo "<p>El jugador " . ($this->turno + 1) . " no puede jugar y roba una carta.</p>";
        }

        // Verificar si el jugador ha ganado
        if (count($jugador_actual->mano) == 0) {
            echo "<h2>¡El jugador " . ($this->turno + 1) . " ha ganado la partida!</h2>";
            exit();
        }

        $this->cambiar_turno();
    }

    private function es_jugada_valida($carta) {
        // Una carta es válida si coincide el color o el número/tipo con la carta en la mesa
        return $carta->color === $this->cartaEnMesa->color ||
               $carta->numeroTipoCarta === $this->cartaEnMesa->numeroTipoCarta;
    }

    private function cambiar_turno() {
        $this->turno = ($this->turno + $this->sentido + $this->numeroDeJugadores) % $this->numeroDeJugadores;
    }
}
?>