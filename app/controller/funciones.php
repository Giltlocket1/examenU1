<?php
session_start();

// Función para verificar si un usuario ha iniciado sesión
function verificarSesion() {
    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');
        exit();
    }
}

// Validar si todos los campos están completos
function validarCampos($campos) {
    foreach ($campos as $campo) {
        if (empty($campo)) {
            return false;
        }
    }
    return true;
}
