<?php
session_start();

class Partida {
    public $numeroDeJugadores;
    public $numeroDeCartas;
    public $turno;
    public $baraja;
    public $cartaEnMesa;
    public $arrayJugadores;
    public $sentido;

    public function __construct($numeroDeJugadores, $numeroDeCartas) {
        if (isset($_SESSION['partida'])) {
            $this->cargarPartidaDesdeSesion();
        } else {
            $this->numeroDeJugadores = $numeroDeJugadores;
            $this->numeroDeCartas = $numeroDeCartas;
            $this->turno = 0;
            $this->arrayJugadores = [];
            $this->baraja = new Baraja();


            $this->cartaEnMesa = array_shift($this->baraja->conjunto_cartas);
            echo "<p>Carta sobre la mesa:</p>";
            $this->cartaEnMesa->pinta_carta();
        }

        $this->guardarPartidaEnSesion();
    }

    public function guardarPartidaEnSesion() {
        $_SESSION['partida'] = [
            'numeroDeJugadores' => $this->numeroDeJugadores,
            'numeroDeCartas' => $this->numeroDeCartas,
            'turno' => $this->turno,
            'arrayJugadores' => $this->arrayJugadores,
            'cartaEnMesa' => $this->cartaEnMesa,
        ];
    }

   public function cargarPartidaDesdeSesion() {
        $partidaGuardada = $_SESSION['partida'];

        $this->numeroDeJugadores = $partidaGuardada['numeroDeJugadores'];
        $this->numeroDeCartas = $partidaGuardada['numeroDeCartas'];
        $this->turno = $partidaGuardada['turno'];
        $this->arrayJugadores = $partidaGuardada['arrayJugadores'];
        $this->cartaEnMesa = $partidaGuardada['cartaEnMesa'];
    }

    public function jugar() {
        $jugadorActual = $this->arrayJugadores[$this->turno];
        $manoActual = $jugadorActual->mano;

        foreach ($manoActual as $carta) {
            if ($_GET['numeroTipocarta'] == $carta->numeroTipoCarta || $_GET['color'] == $carta->colorDeCarta) {
                $cartaEnMesa = $carta;
                $jugadorActual->eliminar_carta($carta);
                $carta->pinta_carta();

                $this->cambiaTurno();
            } else {
                $nuevaCartaRobada = array_shift($this->baraja->conjunto_cartas);
                $jugadorActual->afegir_carta($nuevaCartaRobada);
                $nuevaCartaRobada->pinta_carta();
            }
        }

        if (count($jugadorActual->mano) == 0) {
            echo "El jugador " . $jugadorActual . " ha ganado";
        }

        $this->guardarPartidaEnSesion();
    }

        public function cambiaTurno() {
            for ($this->turno; $this->turno < $this->numeroDeJugadores; $this->turno++) {
                if ($this->turno >= $this->numeroDeJugadores) {
                    $this->turno = 0;
                }
            }
        
            $this->guardarPartidaEnSesion();
        }        
    }
?>