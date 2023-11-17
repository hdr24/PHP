<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elimina</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="index.php">Inicio</a>
        <form action="consulta.php" method="post">
            <select name="id">
                <option value="1">comercial dado</option>
                <option value="2">Productos</option>
                <option value="3">Comerciales</option>
                <option value="4">Ventas</option>
            </select>
            <input type="submit" value="Consulta de datos">
        </form>
        <a href="inserta.php">Insercion de datos</a>
        <a href="modifica.php">Modificacion de datos</a>
        <a href="elimina.php">Eliminacion de datos</a>
    </nav>

    <?php
    require('funciones.php');
    $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');
    $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['id'])) {
        switch ($_POST['id']) {
            case '1':
                deleteProducto($dbs, $_POST['refProducto']);
                echo "Producto borrado";
                break;
            case "2":
                deleteComercial($dbs, $_POST["codComercial"]);
                echo "Comercial borrado";
                break;
            case "3":
                deleteVenta($dbs, $_POST["codComercial"], $_POST['refProducto']);
                echo 'Venta borrada';
        }
    }

    ?>

    <h1>Indique el registro que desee eliminar</h1>
    <p>Borrar un producto o un comercial borrara todas las ventas asociadas a ese producto o comercial</p>

    <h2>Borrar un producto</h2>
    <form action="elimina.php" method="post">
        <label for="refProducto">Codigo del producto</label>
        <select name="refProducto" id="refProducto">
            <?php

            try {
                $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');
                $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $list = $dbs->query('SELECT referencia, nombre from productos');

                foreach ($list as $row) {
                    echo '<option value=' . $row['referencia'] . '>' . $row['nombre'] . '</option><br>';
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
        </select>
        <input type="hidden" name="id" value='1'>
        <input type="submit" value="Borrar producto">
    </form>

    <h2>Borrar un comercial</h2>
    <form action="elimina.php" method="post">
        <label for="codComercial">Codigo de Comercial</label>
        <select name="codComercial" id="codComercial">
            <?php

            try {
                $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');
                $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $list = $dbs->query('SELECT codigo, nombre from comerciales');

                foreach ($list as $row) {
                    echo '<option value=' . $row['codigo'] . '>' . $row['nombre'] . '</option>';
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
        </select>

        <input type="hidden" name="id" value="2">
        <input type="submit" value="Borrar comercial">

        <h2>Borrar una venta</h2>
    </form>

    <form action="elimina.php" method="post">

        <label for="codComercial2">Codigo de Comercial</label>
        <select name="codComercial" id="codComercial2">
            <?php

            try {
                $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');
                $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $list = $dbs->query('SELECT codigo, nombre from comerciales');

                foreach ($list as $row) {
                    echo '<option value=' . $row['codigo'] . '>' . $row['nombre'] . '</option>';
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>


        </select><br>
        <label for="refProducto2">Codigo del producto</label>
        <select name="refProducto" id="refProducto2">
            <?php

            try {
                $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');
                $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $list = $dbs->query('SELECT referencia, nombre from productos');

                foreach ($list as $row) {
                    echo '<option value=' . $row['referencia'] . '>' . $row['nombre'] . '</option><br>';
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
        </select><br>
        <input type="hidden" name="id" value="3">
        <input type="submit" value="Borrar venta">

    </form>
</body>

</html>