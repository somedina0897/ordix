<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['username'])) {
    // Si no hay sesión, redirige al formulario de inicio de sesión
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Has iniciado sesión correctamente.</p>

        <!-- Contenido de la página de inicio -->
        <div class="opciones">
            <a href="perfil.php">Ver Perfil</a>
            <a href="configuracion.php">Configuración</a>
            <a href="logout.php">Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>
