<?php
// Inicia la sesión
session_start();


// Verifica si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica las credenciales (esto es solo un ejemplo, debes validar y verificar las credenciales correctamente)
    $username = "usuarioEjemplo";
    $password = "contrasenaEjemplo";

    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        // Inicia la sesión y almacena datos del usuario
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Redirige a la página protegida
        header("Location: pagina_protegida.php");
        exit;
    } else {
        $error = "Nombre de usuario o contraseña incorrectos";
    }
}