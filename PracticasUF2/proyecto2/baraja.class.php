<?php

class Baraja {
    public $conjunto_cartas = [];

    public function crea_baraja() {
        $coloresCartas = ['amarillo', 'rojo', 'verde', 'azul', 'reverse', 'skip', 'picker'];
        $numerosCartas = [(range(1, 9))];

        $identificador = 0;
        foreach ($coloresCartas as $colorCarta) {
            foreach ($numerosCartas as $numeroCarta) {
                $this->conjunto_cartas[] = new Carta($colorCarta, $numeroCarta, $identificador++);
            }
        }
    }

    public function mezcla() {
        shuffle($this->conjunto_cartas);
    }

    public function pinta_baraja() {
        foreach ($this->conjunto_cartas as $carta) {
            $carta->pinta_carta();
        }
    }

    public function pinta_baraja_girada() {
        foreach ($this->conjunto_cartas as $carta) {
            $carta->pinta_carta_girada();
        }
    }
}

?>