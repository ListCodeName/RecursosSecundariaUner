<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redireccionar a la página de inicio de sesión (puedes cambiar la ruta según tu estructura de archivos)
header("Location: login.php");
exit();
?>
