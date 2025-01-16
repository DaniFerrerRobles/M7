<?php
include 'carta.class.php';

class Baraja {
    public $conjunto_cartas = [];

    public function crea_baraja() {
        $idx = 0;
        foreach (['red', 'yellow', 'blue', 'green'] as $color) {
            for ($i = 0; $i <= 9; $i++) {

                $this->conjunto_cartas[] = new Carta($color, $i, $idx++);
            }
            $this->conjunto_cartas[] = new Carta($color, 'reverse', $i);
            $this->conjunto_cartas[] = new Carta($color, 'skip',$i);
            $this->conjunto_cartas[] = new Carta($color, '+2',$i);
        }
    }

    public function mezcla() {
        shuffle($this->conjunto_cartas);
    }

    public function pinta_baraja() {
        foreach ($this->conjunto_cartas as $carta) {
           $carta->pinta_carta();
        }
        var_dump($this->conjunto_cartas);
    }

    public function pinta_baraja_girada() {
        foreach ($this->conjunto_cartas as $carta) {
           $carta->pinta_carta_girada();
        }
    }
}

?>