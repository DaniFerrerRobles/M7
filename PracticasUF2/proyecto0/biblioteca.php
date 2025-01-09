<?php
session_start();

class Biblioteca {
    public $llibres = [];

    public function __construct() {
        if (!isset($_SESSION['llibres'])) {
            $_SESSION['llibres'] = [];
        } else {
            $this->llibres = $_SESSION['llibres'];
        }
    }

    public function afegirLlibre($llibre) {
        array_push($this->llibres, $llibre);
        $_SESSION['llibres'] = $this->llibres;
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