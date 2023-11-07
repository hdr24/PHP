<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $list = array(1, 2, 3,4,5,6,6,6,6,6,6,6,6,6,6,6,7,8,8,8,8,8,9);
    $list_sorted = array();

    for ($i=0; $i < count($list)-1 ; $i++) { 
        if ($list[$i] != $list[$i+1]) {
            array_push($list_sorted, $list[$i]);
        }
    }
    array_push($list_sorted, $list[count($list) -1]);

    for ($i=0; $i < count($list_sorted) ; $i++) { 
        echo $list_sorted[$i] . " ";
    }
    
    ?>
</body>
</html>