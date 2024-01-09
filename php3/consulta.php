<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
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
    require("funciones.php");
    try {
        $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');

        // Depending on what we chose before we use a switch to display the desired data
        switch ($_POST['id']) {
            case 1:

                if (isset($_POST['cod'])) {
                    consultaComercialDado($dbs, $_POST['cod']);
                } else {
                    // Before displaying a set comercial we have to select which one we want to display
                    $list = $dbs->query('SELECT nombre, codigo FROM comerciales');

                    echo '<form action="consulta.php" method="post"><select name="cod">';

                    foreach ($list as $row) {
                        echo '<option value="' . $row['codigo'] . '">' . $row['nombre'] . '</option>';
                    }
                    echo '</select><input type="submit" value="Realizar consulta">
                    <input type="hidden" name="id" value="1">
                    </form>';
                }
                break;
            case 2:
                consultaProductos($dbs);
                break;
            case 3:
                consultaComerciales($dbs);
                break;
            case 4:
                consultaVentas($dbs);
                break;
            default:

                break;
        }



        unset($dbs);

    } catch (\Throwable $th) {
        echo 'There was an error contact with the administrator';
    }

    ?>




</body>

</html>