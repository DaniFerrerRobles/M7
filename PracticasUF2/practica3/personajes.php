<?php
session_start();

$personajesLOL = [
    [
        'id' => 0,
        'img' => 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Darius_0.jpg',
        'nombre' => 'Darius',
        'rol' => 'Luchador',
        'dificultad' => 'Media',
        'especialidad' => 'Fuerza física y control de área',
        'fuerza' => 'Alta'
    ],
    [
        'id' => 1,
        'img' => 'https://static.wikia.nocookie.net/leagueoflegends/images/2/22/04SH067T4-full.png/revision/latest?cb=20210220184854',
        'nombre' => 'Renekton',
        'rol' => 'Luchador',
        'dificultad' => 'Baja',
        'especialidad' => 'Tanque y daño sostenido',
        'fuerza' => 'Alta'
    ],
    [
        'id' => 2,
        'img' => 'https://static.wikia.nocookie.net/leagueoflegends/images/9/95/Aspecto_centrado_-_Sett_HEARTSTEEL.jpg/revision/latest/scale-to-width-down/1200?cb=20231026003051&path-prefix=es',
        'nombre' => 'Sett',
        'rol' => 'Luchador',
        'dificultad' => 'Baja',
        'especialidad' => 'Fuerza bruta y resistencia',
        'fuerza' => 'Muy alta'
    ],
    [
        'id' => 3,
        'img' => 'https://static.wikia.nocookie.net/leagueoflegends/images/7/77/Aspecto_centrado_-_Nasus_Base.jpg/revision/latest/scale-to-width-down/1200?cb=20231113034517&path-prefix=es',
        'nombre' => 'Nasus',
        'rol' => 'Luchador',
        'dificultad' => 'Alta',
        'especialidad' => 'Fuerza escalable y aguante',
        'fuerza' => 'Alta'
    ],
];

if (!isset($_SESSION['personajes'])) {
    $_SESSION['personajes'] = $personajesLOL;
}

function agregarPersonaje($img, $nombre, $rol, $dificultad, $especialidad, $fuerza) {
    $id = count($_SESSION['personajes']);

    $nuevoPersonaje = [
        'id' => $id,
        'img' => $img,
        'nombre' => $nombre,
        'rol' => $rol,
        'dificultad' => $dificultad,
        'especialidad' => $especialidad,
        'fuerza' => $fuerza
    ];

    array_push($_SESSION['personajes'], $nuevoPersonaje);

    header('Location: practica3.php');
}
?>
