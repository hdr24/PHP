<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex12.php"></form>
    <?php 
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    function resolver_funcion ($a, $b, $c) {
        $raiz = $b ** 2 - 4 * $a * $c;

        if ($raiz > 0) {
            $sol1 = (-$b - sqrt($raiz)) / 2 * $a;
            $sol2 = (-$b + sqrt($raiz)) / 2 * $a;

            return [$sol1, $sol2];
        } elseif ($raiz == 0) {
            $sol = -$b / 2 * $a;
            return [$sol];
        } else {
            return false;
        }
        
        
    }

    $soluciones = resolver_funcion($a, $b, $c);

    if ($soluciones == false) {
        echo "La ecuacion no tiene soluciones reales";
    } else {
    foreach ($soluciones as $solucion) {
        echo "La/s solucion/es: " . $solucion . " ";
    }
}

    ?>
</body>
</html>