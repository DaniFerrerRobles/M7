<?php

class Llibre {
    public string $titol = "Don Quijote de la Mancha";
    public string $autor = "Miguel de Cervantes";

    public function __construct(string $titol, string $autor) {
        $this->titol = $titol;
        $this->autor = $autor;
    }

    public function descripcio(): string {
        return "El libro \"{$this->titol}\" lo escribió {$this->autor}.";
    }

    public function getAutor(): string {
        return $this->autor;
    }
}


class Persona {
    public string $nom;
    public int $edat;

    public function __construct(string $nom, int $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function saludar(): string {
        return "Hola, soy " . $this->nom . " y tengo " . $this->edat . " años.";
    }
}

$persona = new Persona("Anna", 25);
echo $persona->saludar();


class Producte {
    public string $nom;
    public  string $preu;

    public function __construct($nom, $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }

    public function mostrarPreu() : string{
        return "El precio es de " . $this->preu . "€.";
    }    
}
$producte = new Producte("Balón", "30");
echo $producte->mostrarPreu();


class Calculadora {
    public function sumar($a, $b) : int{
        return $a + $b;
    }

    public function restar($a, $b) : int {
        return $a - $b;
    }

    public function multiplicar($a, $b) : int {
        return $a * $b;
    }

    public function dividir($a, $b) : int {
        return $a / $b;
    }
}

$calculadora = new Calculadora();


class Productee {
    public string $nom;
    public string $preu;

    public function __construct($nom, $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }

    public function mostrarPreu(): string {
        return $this->preu . "€";
    }    
}
$productos = [
    $producte1 = new Producte("camiseta", "20"),
    $producte2 = new Producte("pantalon", "89"),
    $producte3 = new Producte("botas", "62"),
    $producte4 = new Producte("pelota", "70"),    
];


echo "<table>
        <tr>
            <th>Nom</th>
            <th>Preu</th>
        </tr>";

foreach ($productos as $producto) {
    echo "<tr>
            <td>" . $producto->nom . "</td>
            <td>" . $producto->mostrarPreu() . "</td>
          </tr>
}
    </table>";
}



class Animal {
    public string $nom;
    public int $tipus;

    public function __construct($nom, $tipus) {
        $this->nom = $nom;
        $this->tipus = $tipus;
    }

    public function descriure(): string {
        return "Hola, " . $this->nom ."Ets " . $this->tipus . ".";
    }
}

if (isset($_POST['nom']) && isset($_POST['tipus'])) {
    $nom = $_POST['nom'];
    $tipus = $_POST['tipus'];

    $animal1 = new Animal($nom, $tipus);

    echo $animal1->descriure();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario</h2>
    <form method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="edat">tipuus:</label>
        <input type="text" id="tipus" name="tipus" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>