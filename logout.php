<?php
session_start();
session_unset(); // Eliminar todas las variables de sesión
session_destroy(); // Destruir la sesión actual

// Redirigir al formulario de inicio de sesión
header("Location: login.php");
exit();
?>
