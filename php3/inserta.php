<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserta</title>
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

    <h1>Elija lo que desea insertar</h1>
    <a href="iProducto.html">Producto</a>
    <a href="iVentas.php">Ventas</a>
    <a href="iComerciales.html">Comercial</a>

    <?php
    require("funciones.php");
    if (isset($_POST["id"])) {

        try {
            $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');
            $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // We use a switch to determine what we have to insert then get the values from POST and insert them
            switch ($_POST["id"]) {
                case 1:
                    insertProductos($dbs, $_POST["referencia"], $_POST["nombre"], $_POST["descripcion"], $_POST["precio"], $_POST["descuento"]);
                    echo "Producto insertado";
                    break;
                case 2:
                    insertComerciales($dbs, $_POST["codigo"], $_POST["nombre"], $_POST["salario"], $_POST["hijos"], $_POST["fNacimiento"] );
                    echo "Comercial insertado";
                    break;
                case 3:
                    insertVentas($dbs, $_POST["codComercial"], $_POST["refProducto"], $_POST["cantidad"], $_POST["fecha"] );

            }
        } catch (\Throwable $th) {
            echo 'There was an error contact with the administrator';
        }
    }

    ?>

</body>

</html>