<?php
include './app/controller/funciones.php';


$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (!validarCampos([$username, $password, $confirm_password])) {
        $error = 'Todos los campos son obligatorios';
    } elseif ($password !== $confirm_password) {
        $error = 'Las contraseñas no coinciden';
    } elseif (isset($_SESSION['usuarios'][$username])) {
        $error = 'El usuario ya existe';
    } else {
        // Guardar usuario en sesión
        $_SESSION['usuarios'][$username] = $password;
        header('Location: index.php');
        exit();
    }
}


?>
