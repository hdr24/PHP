<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
if (! isset($_SESSION['user'])) {header('Location: informacion.php');}?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <style>
        body {
            background-color: <?php
                if (isset($_POST['color'])) {
                    $_SESSION['color'] = $_POST['color'];
                    echo $_POST['color'];
                } else if (isset($_SESSION['color'] )) {
                    echo $_SESSION['color'];
                }
                ?>
        }
    </style>
</head>
<body>
    <form action="preferencias.php" method="post">
        <label for="color">Escoja el color de fondo</label>
        <input type="color" name="color" id="color"><br>
        <input type="submit" value="Guardar preferencias">
    </form>
    <a href="aplicacion.php">Volver a aplicacion ↩</a>
</body>
</html>