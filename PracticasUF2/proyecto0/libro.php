<?php

class Llibre {
    public $titol, $autor, $anyPublicacio, $foto;

    public function __construct(string $titol, string $autor, int $anyPublicacio, string $foto) {
        $this->titol = $titol;
        $this->autor = $autor;
        $this->anyPublicacio = $anyPublicacio;
        $this->foto = $foto;
    }

    public function detallsLlibre() {
        return "Títol: $this->titol, Autor: $this->autor, Any de publicació: $this->anyPublicacio";
    }

}
?>