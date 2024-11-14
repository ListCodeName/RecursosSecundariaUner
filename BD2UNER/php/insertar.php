<?php

include_once 'conection.php';

// Recibir datos del formulario

$usuario = $_POST['username-r'];
$contrasenia = $_POST['password-r'];
$nombre = $_POST['nombre-r'];
$apellido = $_POST['apellido-r'];
$email = $_POST['email-r'];


// Insertar datos en la base de datos
$sql = "INSERT INTO cliente (username, password, nombre, apellido, email) VALUES ('$usuario', '$contrasenia', '$nombre', '$apellido', '$email')"; 

if ($conn->query($sql) === TRUE) {
    // Obtener el ID del último registro insertado
    $last_id = $conn->insert_id;
    
    // Redireccionar a la página original con los datos recién insertados
    header("Location: ../index.php");
    exit();
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
