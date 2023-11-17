<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $date = date('h:i:s a', time());
    
    if (! isset($_SESSION['visitas'])) {
        
        echo 'Bienvenido';
        
        

        
    } else {
        foreach ($_SESSION['visitas'] as $row) {
            echo $row."<br>";
        }
    }
    $_SESSION['visitas'][] = $date;


    ?>
</body>
</html>