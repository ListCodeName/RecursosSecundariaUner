<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "bd2uner";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error . "\n");
}

// Recibir datos del formulario
$usuario = $_POST['user'];
$contrasenia = $_POST['pass'];

// Insertar datos en la base de datos
$sql = "SELECT * FROM usuario WHERE username = '$usuario' AND password = '$contrasenia'";
$result = $conn->query($sql);


if ($result) {
    // Obtener los resultados
    while ($row = $result->fetch_assoc()) {
        // Procesar cada fila de resultados
        echo "Bienvenido: " . $row['nombre'] . "<br>";
    }
} else {
    echo "Error en la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>



</body>
</html>
