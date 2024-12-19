INICIAR SESIONES

<?php

session_start();

if (isset($_SESSION['gormitis'])) {
    echo "La variable 'gormitis' està inicialitzada.";
} else {
    echo "La variable 'gormitis' no està inicialitzada.";
}
