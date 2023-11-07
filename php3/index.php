<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="consulta.php">Consulta de datos</a>
        <a href="inserta.php">Insercion de datos</a>
        <a href="modifica.php">Modificacion de datos</a>
        <a href="elimina.php">Eliminacion de datos</a>
    </nav>
    <?php

    try {
        require("funciones.php");

        $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');

        $list = $dbs->query('SELECT nombre FROM comerciales');

        echo '';


        foreach ($list as $row) {
            echo $row['nombre'] . '<br>';
        }

        insertProductos($dbs, "1", "ejemplo", "ejemplo", "43", "10");
    } catch (\Throwable $th) {
        
    }

    ?>
</body>
</html>