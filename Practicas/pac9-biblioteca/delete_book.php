<?php
session_start();

if ($_SESSION['role'] != 'admin') {
    header("Location: home.php");
    exit();
}

in

    if ($libro['id']) {
        # code...
    }



?>