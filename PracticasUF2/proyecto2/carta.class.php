<?php

class Carta {
    public $coloroTipoCarta;
    public $numeroCarta;
    public $identificadorCarta;

    public function __construct($coloroTipoCarta, $numeroCarta, $identificadorCarta) {
        $this->coloroTipoCarta = $coloroTipoCarta;
        $this->numeroCarta = $numeroCarta;
        $this->identificadorCarta = $identificadorCarta;
    }

    public function pinta_carta() {
        echo "<img src='cartas_uno/" . $this->numeroCarta . "_" . $this->coloroTipoCarta . ".png' alt='carta' />";
    }
    

    public function pinta_carta_link() {

    }

    public function pinta_carta_girada() {
        echo "<img src='cartas_uno/carta_girada.png' alt='Carta girada' />";
    }
}

?>