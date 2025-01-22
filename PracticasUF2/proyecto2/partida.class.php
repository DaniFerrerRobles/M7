<?php
include 'baraja.class.php';
include 'carta.class.php';
include 'index.php';

class Partida {
    public $numero_jugadores;
    public $numero_cartas;
    public $turno;
    public $baraja;
    public $carta_en_mesa;
    public $array_jugadores;
    public $constante_sentido;

    $numero_jugadores = $numeroDeJugadores;

   $numero_cartas = $numeroDeCartes;

   $baraja = new Baraja();


}