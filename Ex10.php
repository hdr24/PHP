<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cadena="Esto es un string de varias palabras";

    echo "<p> Numero de caracteres: " . strlen($cadena) . "</p>";
    echo strtoupper($cadena);
    echo "<p> Numero de palabras: " . str_word_count($cadena) . "</p>";
    ?>
</body>
</html>