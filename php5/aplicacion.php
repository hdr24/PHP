<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <p>Bienvenido
        <?php
        session_start();
        require_once("usuario.php");
        $user = unserialize($_SESSION["usuario"]);
        echo $user->get_nombre() ?>
    </p>
    <p>Se ha accedido a la aplicacion correctamente</p>
    <p>Hector del Real Lopez</p>

    <p>Escoja una de las opciones</p>
    <a href="create.html">Dar de alta</a>
    <a href="delete.html">Eliminar usuario</a>
    <a href="update.html">Modificar usuario</a>
    <a href="logout.php">Cerrar sesion</a>
</body>

</html>