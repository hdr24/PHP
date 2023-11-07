<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sample = "'Tomorrow I\'ll learn PHP global variables.' <br>
    'This is a bad command : del c:\\\*.*'";

    $sample_clean = "";

    for ($i=0; $i < strlen($sample)-1 ; $i++) { 
        if ($sample[$i+1] == "\\" && $sample[$i] == "\\")  { //Comprueba si hay 2 contrabarras seguidas 
            $sample_clean = $sample_clean . $sample[$i];
        } elseif ($sample[$i] != "\\")  { // Comprueba si no es una contrabarra
            $sample_clean = $sample_clean . $sample[$i];
        }
    }
    echo $sample_clean;
    ?>
</body>
</html>