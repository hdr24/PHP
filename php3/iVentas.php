<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserta venta</title>
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

    <form action="inserta.php" method="post">

    <label for="codComercial">Codigo de Comercial</label>
    <select name="codComercial" id="codComercial">
        <?php
        // We make a dropdown list with the data in the database
        try {
            $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');
            $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $list = $dbs->query('SELECT codigo, nombre from comerciales');

            foreach ($list as $row) {
                echo '<option value='. $row['codigo'] .'>'. $row['nombre'] . '</option>';
            }
        } catch (\Throwable $th) {
            echo 'There was an error contact with the administrator';
        }
        ?>
    </select> <br>

    <label for="refProducto">Referencia de producto</label>
    <select name="refProducto" id="refProducto">
        <?php
        
        try {
            $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');
            $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $list = $dbs->query('SELECT referencia, nombre from productos');

            foreach ($list as $row) {
                echo '<option value='. $row['referencia'] .'>'. $row['nombre'] . '</option><br>';
            }
        } catch (\Throwable $th) {
            echo 'There was an error contact with the administrator';
        }
        ?>
    </select><br>
    
    <label for="cantidad">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad" required><br>

    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" id="fecha"><br>

    <input type="submit" value="Insertar venta">
    <input type="hidden" name="id" value="3">


    </form>
</body>
</html>