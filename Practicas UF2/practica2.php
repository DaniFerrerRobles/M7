<?php
class Cotxe {
    public string $marca = "Seat";
    public string $model = "Leon";

    public function descripcio(): string {
        return "Aquest cotxe és un " . $this->marca . " " . $this->model;
    }
}


class Persona {
    public string $nom;
    public int $edat;

    public function __construct($nom, $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function benvinguda(): string {
        return "Hola, " . $this->nom ."Tens " . $this->edat . " anys.";
    }
}

$persona1 = new Persona("Joan", 30);

$persona2 = new Persona("Maria", 25);

echo $persona1->benvinguda();

echo $persona2->benvinguda();


if (isset($_POST['nom']) && isset($_POST['edat'])) {
    $nom = $_POST['nom'];
    $edat = $_POST['edat'];

    $persona3 = new Persona($nom, $edat);

    echo $persona3->benvinguda();
}



class Calculadora {
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }
}

$calculadora = new Calculadora();

$resultado = $calculadora->sumar(5, 7);

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

        <label for="edat">Edat:</label>
        <input type="number" id="edat" name="edat" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<?php

class Animal {
    public string $nom;
    public string $tipus;

    public function __construct($nom, $tipus) {
        $this->nom = $nom;
        $this->tipus = $tipus;
    }

    public function descripcio(): string {
        return "Es diu " . $this->nom . ", es un " . $this->tipus . ".";
    }

    public function saludar(): string {
        return "Soc un " . $this->tipus . " i em dic " . $this->nom . ".";
    }
}

$animal1 = new Animal("Pepe", "gato");



class Producte {
    public string $nom;
    public int $preu;

    public function __construct($nom, $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }
}


$productes = [
    $producto1 =  new Producte("TV", 120),
    $producto2 = new Producte("PC", 250),
    $producto3 = new Producte("Telefon", 350),
    $producto4 = new Producte("PS5", 600),
    $producto5 = new Producte("Mnado", 50)
];

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productes</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Preu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productes as $producte) {
                echo "<tr>
                        <td>$producte->nom</td>
                        <td>$producte->preu €</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

