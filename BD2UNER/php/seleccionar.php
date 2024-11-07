<?php
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