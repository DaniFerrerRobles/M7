<?php

class Biblioteca {
    public $llibres = [];

    public function afegirLlibre($llibre) {
        array_push($this->llibres, $llibre);
    }    

    public function mostrarLlibres() {
        $detallsLlibres = [];
        foreach ($this->llibres as $llibre) {
            $detallsLlibres[] = $llibre->detallsLlibre();
        }
        return $detallsLlibres;
    }

    public function cercarLlibrePelTitol($text) {
        $resultats = [];
        foreach ($this->llibres as $llibre) {
            if (stripos($llibre->titol, $text) == true) {
                $resultats[] = $llibre->detallsLlibre();
            }
        }
        return $resultats;
    }
}

?>