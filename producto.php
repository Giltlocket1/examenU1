<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <link href="./public/css/b5.css" rel="stylesheet"></head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mi Aplicación PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./app/controller/login.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./app/controller/registro.php">Registro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">
    <h1 class="text-center">Agregar Producto</h1>
    <p class="text-center">Bienvenido, <?php echo $_SESSION['usuario']; ?> <a href="./app/controller/cerrar_sesion.php" class="btn btn-link">Cerrar sesión</a></p>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form action="producto.php" method="POST" class="row g-3">
        <div class="col-md-6">
            <label for="producto" class="form-label">Nombre del producto</label>
            <input type="text" name="producto" class="form-control" id="producto" placeholder="Nombre del producto" required>
        </div>
        <div class="col-md-6">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" id="precio" placeholder="Precio" required>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success w-100">Agregar Producto</button>
        </div>
    </form>

    <h2 class="mt-4">Productos Añadidos</h2>
    <ul class="list-group">
        <?php foreach ($productos as $producto): ?>
            <li class="list-group-item"><?php echo $producto['nombre'] . " - $" . $producto['precio']; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- Bootstrap JS -->
<script src="./public/JS/b5.js"></script>
<script src="./public/JS/b52.js"></script>

</body>
</html>
