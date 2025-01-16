<?php

class Jugador {
    public $mano, $id;

    public function __construct($id) {
        $this->id = $id;
        $this->mano = [];
    }


    public function afegir_carta($carta) {
        $this->mano[] = $carta;
    }
}