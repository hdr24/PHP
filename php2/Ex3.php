<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sum = 0;
    for ($i=2; $i < 101; $i++) {
        $divs = 0;
        for ($j=1; $j < $i ; $j++) { 
            if ($i%$j == 0) {
                $divs++;
            }
        }
        if ($divs < 2) {
            $sum = $sum + $i;
        }
        
    }
        echo $sum;
    ?>
</body>
</html>