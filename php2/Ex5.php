<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $num = 123456;
    $sum = 0;

    for ($i=0; $i < strlen($num) ; $i++) { 
        $sum = $sum + $num%10; 
        $num = $num/10;
    }

    echo $sum;
    ?>
</body>
</html>