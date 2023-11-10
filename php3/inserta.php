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
</body>
</html>