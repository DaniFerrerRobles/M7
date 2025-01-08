<?php

class Biblioteca {
    public $llibres = [];

    public function afegirLlibre($llibre) {
        $this->llibres[] = $llibre;
    }

    public function mostrarLlibres() {
        $detallsLlibres = [];
        foreach ($this->llibres as $llibre) {
            $detallsLlibres[] = $llibre->detallsLlibre();
        }

        return implode("<br>", $detallsLlibres);
    }

}
?>