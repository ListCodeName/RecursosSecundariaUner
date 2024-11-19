<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="icomoon.css">
    <title>Document</title>
</head>
<body>

<?php
    session_start(); // Inicia la sesión

    if(isset($_SESSION['status'])){
        echo $_SESSION['status'];
    }


    // Verifica si el usuario ya está logueado
    //if (isset($_SESSION['username'])) {
    //    echo "Hola, " . $_SESSION['username'];
    //}
?>

    <span class="icon-key" id="open-login"></span>



    <div class="slide-login" id="modal-login">
        <span class="icon-cross" id="close-login"></span>
        <span class="icon-loop2" id="switch"></span>
        
        <form action="php/seleccionar.php" method="post" id="login">
            
            
            <div class="login-header">
                <p>Ingreso de usuario</p>
            </div>
    
            <div class="login-body">
                <div class="lb-area">
                    <span class="icon-user"></span>
                    <input type="text" placeholder="Usuario..." name="user" required>
                </div>
                <div class="lb-area">
                    <span class="icon-lock"></span>
                    <input type="password" placeholder="Contraseña..." name="pass" required>
                </div>
            </div>
    
            <input class="enviar" type="submit" value="Ingresar">
    
        </form>
    
        <form action="php/insertar.php" method="post" id="register">
            
            <div class="login-header">
                <p>Registro</p>
            </div>

            <div class="reg-campos">
                <div class="reg-campos-item">
                    <p>Nombre</p>
                    <input name="nombre-r" type="text" required>
                </div>

                <div class="reg-campos-item">
                    <p>Apellido</p>
                    <input name="apellido-r" type="text" required>
                </div>

                <div class="reg-campos-item">
                    <p>Email</p>
                    <input name="email-r" type="email" required>
                </div>

                <div class="reg-campos-item">
                    <p>Usuario</p>
                    <input name="username-r" type="text" required>
                </div>

                <div class="reg-campos-item">
                    <p>Contraseña</p>
                    <input name="password-r" type="password">
                </div>

            </div>

            <input class="enviar" type="submit" value="Enviar">
        </form>

    </div>

    <script src="js/login.js"></script>
</body>
</html>