<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numeroDeJugadors = $_POST['numJugadors'];
    $numeroDeCartes = $_POST['numCartes'];
} else {
    echo '
    <form method="POST action index.php">
        <label for="numJugadors">Numero de jugadors:</label>
        <input type="number" id="numJugadors" name="numJugadors" min="2" max="9" required><br><br>
        
        <label for="numCartes">Numero de cartes per jugador:</label>
        <input type="number" id="numCartes" name="numeCartes" min="1" max="7" required><br><br>
        
        <input type="submit" value="Iniciar partida">
    </form>';
}
?>