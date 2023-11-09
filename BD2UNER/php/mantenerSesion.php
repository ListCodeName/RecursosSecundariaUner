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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form action="" method="post">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
