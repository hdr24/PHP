<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
    <style>
        body {
            background-color: <?php
            session_start();
            require("funciones.php");
            cambiaColor();?>
        }

        #error {
            color: red;
        }
    </style>
</head>
<body>
   

    <form action="login.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user"><br>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" value="Iniciar sesion">

        <?php 
        
        if (isset($_GET['error'])) {
            echo '<p id="error">El usuario o la contraseña es incorrecto</p>';
        }

        ?>
    </form>

    <p ><a href="informacion.php">Entrar como invitado</a></p>
</body>
</html>