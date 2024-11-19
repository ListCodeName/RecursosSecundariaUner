<?php  
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="icomoon.css">

</head>
<body>
    
    
    <span class="icon-key" id="open-login"></span>

    <div class="slide-login" id="modal-login">
        <span class="icon-cross" id="close-login"></span>
        
        <form action="#" method="post" id="login">
            
            <div class="user-logged">
                <span class="icon-user"></span>
                <p>Bienvenido, <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']  ?></p>
                
            </div>

            <input class="enviar" type="submit" value="Cerrar Sesión">

        </form>
    </div>

    <script src="js/login.js"></script>


</body>
</html>