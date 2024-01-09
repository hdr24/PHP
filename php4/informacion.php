<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <style>
        body {
            background-color: <?php
            session_start();
            require("funciones.php");
            cambiaColor();?>
        }
    </style>
</head>
<body>
    <h1>Informacion</h1>
    <p>Para usar la aplicacion debe iniciar sesion o registrarte, luego puede cambiar el color de fondo en preferencias</p>

    <a href="index.php">Volver al indice ↩</a>
    <?php 
    // If we are logged in we can go back to the app page.
    if (isset($_SESSION['user'])) {
        echo "<a href='aplicacion.php'>Volver a aplicacion↩ </a>";
    }
    ?>
</body>