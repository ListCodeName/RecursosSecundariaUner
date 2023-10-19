<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = ""; //nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error . "\n");
}

// Recibir datos del formulario


// Insertar datos en la base de datos
$sql = "INSERT"; 

if ($conn->query($sql) === TRUE) {
    // Obtener el ID del último registro insertado
    $last_id = $conn->insert_id;
    
    // Redireccionar a la página original con los datos recién insertados
    header("Location: index.php");
    exit();
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
