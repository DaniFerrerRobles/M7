<?php
include 'carta.class.php';

class Jugador {
    public $mano = [];
    public $id;

    public function afegir_carta($carta) {
        $mano[] = $carta;
    }

    public function eliminar_carta($carta) {
        foreach ($mano as $cartas => $cartaActual) {
            array_shift($carta);
            }
        }
    }

    public function mostrar_ma() {
        foreach ($jugadores as $jugador => $cartas) {

            foreach ($cartas as $carta) {
                $carta->pinta_carta();
            }
    }
}
?>