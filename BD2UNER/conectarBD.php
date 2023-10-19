<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <form action="php/conection.php" method="post">
        <label for="user">Usuario:</label>
        <input type="text" name="user" required>

        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
