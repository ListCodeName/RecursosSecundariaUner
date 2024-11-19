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

session_start();
if ($conn->query($sql) === TRUE) {
    // Obtener el ID del último registro insertado
    $last_id = $conn->insert_id;
    
    $_SESSION['status'] = 'Usuario creado con éxito.';

    // Redireccionar a la página original con los datos recién insertados
    header("Location: ../login.php");
    
} else {

    $_SESSION['status'] = 'Hubo un problema para insertar datos.';
    header("Location: ../login.php");

}

// Cerrar la conexión
$conn->close();
?>
