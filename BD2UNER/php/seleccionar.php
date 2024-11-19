<?php

include_once 'conection.php';

// Recibir datos del formulario
$usuario = $_POST['user'];
$contrasenia = $_POST['pass'];

// Seleccionar datos en la base de datos
$sql = "SELECT * FROM cliente WHERE username = '$usuario' AND password = '$contrasenia'";
$result = $conn->query($sql);

session_start();
if ($result) {
    //Enviar múltiples resultados
    //$_SESSION['data'] = $result;

    // Obtener los resultados
    while ($row = $result->fetch_assoc()) {

        // Procesar cada fila de resultados
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] = $row['apellido'];
        //$_SESSION['email'] = $row['email'];
        //$_SESSION['']
        //$_SESSION['']
        
        header("Location: ../index.php");
    }
} else {
    echo "Error en la consulta: " . $conn->error;
    header("Location: ../login.php");
}

// Cerrar la conexión
$conn->close();

?>