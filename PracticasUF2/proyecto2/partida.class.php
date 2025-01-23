<?php
include 'baraja.class.php';
include 'carta.class.php';
include 'jugador.class.php';

class Partida {
    public $numeroDeJugadores;
    public $numeroDeCartas;
    public $turno;
    public $baraja;
    public $cartaEnMesa;
    public $arrayJugadores;
    public $sentido;

    public function __construct($numeroDeJugadores, $numeroDeCartas) {
        $this->numeroDeJugadores = $numeroDeJugadores;
        $this->numeroDeCartas = $numeroDeCartas;
        $this->turno = 0;
        $this->arrayJugadores = [];

        $this->baraja = new Baraja();

        for ($jugador = 1; $jugador <= $numeroDeJugadores; $jugador++) {
            $this->arrayJugadores[$jugador] = array_splice($this->baraja->conjunto_cartas, 0, $this->numeroDeCartas);
        }    
        
        $this->cartaEnMesa = array_shift($this->baraja->conjunto_cartas);
        echo "<p>Carta sobre la mesa:</p>";
        $this->cartaEnMesa->pinta_carta();        
    }

    public function jugar() {     
        $jugadorActual = $this->arrayJugadores[$this->turno];
        $manoActual = $jugadorActual->mano;

        foreach ($manoActual as $carta) {
            if ($_GET['numeroTipocarta'] == $carta->numeroTipoCarta || $_GET['color'] == $carta->colorDeCarta) {
                $cartaEnMesa = $carta;
                $jugadorActual->eliminar_carta($carta);
                $carta->pinta_carta();

                cambiaTurno();

            }else{
                $nuevaCartaRobada = array_shift($this->baraja->conjunto_cartas);
                $jugadorActual->afegir_carta($nuevaCartaRobada);
                $nuevaCartaRobada->pinta_carta();
            }
        }

        if (count($jugadorActual->manoActual) == 0) {
            echo "El jugador " . $jugadorActual . " ha ganado";
        }
    }

    public function cambiaTurno(){
        for ($turno=0; $turno < $this->numeroDeJugadores; $turno++) { 
            $jugadorActual = $this->arrayJugadores[$turno];
        }
    }
}
?>