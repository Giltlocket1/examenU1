<?php
include './app/controller/funciones.php';


$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['usuarios'][$username]) && $_SESSION['usuarios'][$username] === $password) {
        // Usuario válido
        $_SESSION['usuario'] = $username;
        header('Location: producto.php');
        exit();
    } else {
        $error = 'Usuario o contraseña incorrectos';
    }
}


?>
