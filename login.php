<?php
session_start();

// Credenciales de usuario
$usuario_valido = "usuario"; // Cambia esto a un usuario válido
$contrasena_valida = "contrasena"; // Cambia esto a una contraseña válida

// Verifica si se han enviado el usuario y la contraseña
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Comprueba si el usuario y la contraseña coinciden
    if ($username === $usuario_valido && $password === $contrasena_valida) {
        // Guarda el nombre de usuario en la sesión y redirige a inicio.php
        $_SESSION['username'] = $username;
        header("Location: inicio.php");
        exit();
    } else {
        // Si son incorrectos, muestra un mensaje de error
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='login.php';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulario">
        <h1>Inicio de sesión</h1>
        <form method="post" action="login.php">
            <div class="username">
                <input type="text" id="username" required name="username" placeholder=" ">
                <label for="username">Usuario</label>
            </div>
            <div class="contraseña">
                <input type="password" id="password" required name="password" placeholder=" ">
                <label for="password">Contraseña</label>
            </div>
            <div class="recordar"><a href="#">¿Olvidé Contraseña?</a></div>
            <input type="submit" value="Iniciar">
            <div class="registro">
                Quiero hacer el <a href="#">Registro</a>
            </div>
        </form>
    </div>
</body>
</html>
