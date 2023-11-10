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
        <a href="consulta.php">Consulta de datos</a>
        <a href="inserta.php">Insercion de datos</a>
        <a href="modifica.php">Modificacion de datos</a>
        <a href="elimina.php">Eliminacion de datos</a>
    </nav>
    <form action="consulta.php" method="post">
        <select name="cod" id="">
            <?php

            try {
                $dbs = new PDO('mysql:host=localhost;dbname=ventas_comerciales', 'dwes', 'dwes');

                switch ($_POST['id']) {
                    case 1:
                        $list = $dbs->query('SELECT nombre, codigo FROM comerciales');

                        foreach ($list as $row) {
                            echo '<option value"' . $row['codigo'] . '">' . $row['nombre'] . '</option>';
                        }
                        break;
                    case 2:
                        $list = $dbs->query('SELECT nombre, referencia FROM productos');

                        foreach ($list as $row) {
                            echo '<option value"' . $row['referencia'] . '">' . $row['nombre'] . '</option>';
                        }
                        break;
                    case 3:
                        $list = $dbs->query('SELECT nombre, codigo FROM comerciales');

                        foreach ($list as $row) {
                            echo '<option value"' . $row['codigo'] . '">' . $row['nombre'] . '</option>';
                        }
                        break;
                    case 4:
                        consultaV
                        break;
                    default:
                        # code...
                        break;
                }



                unset($dbs);

            } catch (\Throwable $th) {
                //throw $th;
            }

            ?>
        </select>
        <input type="submit" value="Realizar consulta">
    </form>
</body>

</html>