<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario no está autenticado
if (!isset($_SESSION["usuario"])) {
    // Redireccionar a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Si el usuario está autenticado, mostrar la bienvenida
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?>!</h1>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
