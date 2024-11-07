<?php

include_once 'conection.php';

// Recibir datos del formulario

$usuario = $_POST[''];
$contrasenia = $_POST[''];


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
