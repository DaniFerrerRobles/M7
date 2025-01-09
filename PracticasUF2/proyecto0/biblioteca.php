<?php

class Biblioteca {
    public $llibres = [];       

    public function afegirLlibre($llibreDelUsuario) {
        $this->llibres[] = $llibreDelUsuario;
    }

    public function mostrarLlibres() {
        $infoLlibres = [];
        foreach ($this->llibres as $llibre) {
            $infoLlibres[] = $llibre->detallsLlibre();
        }
        return $infoLlibres;
    }

    public function cercarLlibrePelTitol($tituloQueBuscaElUsuario) {
        $resultats = [];
        foreach ($this->llibres as $llibre) {
            if (stripos($llibre->titol, $tituloQueBuscaElUsuario) !== false) {
                $resultats[] = $llibre->detallsLlibre();
            }
        }
        return $resultats;
    }
}

?>