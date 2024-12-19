<?php

include '../src/config/config.php';

class Futbolista {
    
    public $id, $foto, $nombre, $edad, $nacionalidad, $equipo, $posicion, $carta_fifa;

    public function __construct($id, $foto, $nombre, $edad, $nacionalidad, $equipo, $posicion, $carta_fifa) {
        $this->id = $id;
        $this->foto = $foto;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->nacionalidad = $nacionalidad;
        $this->equipo = $equipo;
        $this->posicion = $posicion;
        $this->carta_fifa = $carta_fifa;
    }

    public function obtenerHabilidades() {
        return implode(", ", [
            "Valoración: " . $this->carta_fifa['valoracion'],
            "Ritmo: " . $this->carta_fifa['ritmo'],
            "Tiro: " . $this->carta_fifa['tiro'],
            "Pase: " . $this->carta_fifa['pase'],
            "Regate: " . $this->carta_fifa['regate'],
            "Defensa: " . $this->carta_fifa['defensa'],
            "Físico: " . $this->carta_fifa['fisico']
        ]);
    }
}

echo "<h1>Lista de Jugadores</h1>";

foreach ($futbolistas as $futbolista) {
    echo '<div>';
     '<p>Foto: <img src="' . $futbolista->foto . '" alt="Foto"/></p>';
    '<p>Nombre: ' . $futbolista->nombre . '</p>';
    '<p>Edad: ' . $futbolista->edad . '</p>';
    '<p>Nacionalidad: ' . $futbolista->nacionalidad . '</p>';
    '<p>Equipo: ' . $futbolista->equipo . '</p>';
    '<p>Posición: ' . $futbolista->posicion . '</p>';
    '<p>Habilidades: ' . $futbolista->obtenerHabilidades() . '</p>';
    '</div>';
}

?>