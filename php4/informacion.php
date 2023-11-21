<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <style>
        body {
            background-color: <?php
                if (isset($_POST['color'])) {
                    setcookie('color', $_POST['color']);
                    echo $_POST['color'];
                } else if (isset($_COOKIE['color'] )) {
                    echo $_COOKIE['color'];
                }
                ?>
        }
    </style>
</head>