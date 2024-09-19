<?php
include './app/controller/funciones.php';


verificarSesion();

$error = '';
$productos = $_SESSION['productos'] ?? [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];

    if (!validarCampos([$producto, $precio])) {
        $error = 'Todos los campos son obligatorios';
    } else {
        // Agregar producto a la sesión
        $_SESSION['productos'][] = ['nombre' => $producto, 'precio' => $precio];
        $productos = $_SESSION['productos'];
    }
}


?>
