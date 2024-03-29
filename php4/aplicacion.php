<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    // If the user somehow tried to go into this page without being logged in they will be redirected to the information page
    if (! isset($_SESSION['user'])) {header('Location: informacion.php');}?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <style>
        body {
            background-color: <?php require("funciones.php"); cambiaColor();?>
        }
    </style>
<body>
    <a href="informacion.php">Informacion</a>
    <a href="preferencias.php">Preferencias</a>
    <a href="aplicacion.php?cerrar=true">Cerrar sesion</a>

    <?php
    // If we click on log out we are redirected to this same page but this code will execute
    if (isset($_GET['cerrar'])) {
        unset($_SESSION['color']);
        session_destroy();
        header("Location: index.php");
    }
    ?>
</body>
</head>