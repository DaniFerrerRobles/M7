<?php

class Carta {
    public $coloroTipoCarta, $numeroCarta, $identificadorCarta;

    public function __construct($coloroTipoCarta, $numeroCarta, $identificadorCarta) {
        $this->coloroTipoCarta = $coloroTipoCarta;
        $this->numeroCarta = $numeroCarta;
        $this->identificadorCarta = $identificadorCarta;
    }

    public function pinta_carta() {
        echo "<img src='Descargas/$this->numeroCarta.png'_'$this->coloroTipoCarta.png' alt=carta''/>";
    }

    public function pinta_carta_link() {

    }

    public function pinta_carta_girada() {
        echo "<img src='Descargas/carta_girada.png' alt='Carta girada' />";
    }

        

}

?>