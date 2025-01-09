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
        return '
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="' . $this->foto . '" class="card-img-top " alt="Imatge">
                    <div class="card-body">
                        <h5 class="card-title">' . $this->titol . '</h5>
                        <p class="card-text">Autor: ' . $this->autor . '</p>
                        <p class="card-text">Any: ' . $this->anyPublicacio . '</p>
                    </div>
                </div>
            </div>';
    }
    

}
