<?php
session_start();
include 'functions.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: home.php");
    exit();
}



$id =$_GET['id'];

if(isset($_SESSION['libros'][$id])){
    eliminarLibro($id);
    exit;
}

   
