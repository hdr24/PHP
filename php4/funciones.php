<?php

function cambiaColor()
{
    if (isset($_POST['color'])) {
        setcookie('color', $_POST['color']);
        echo $_POST['color'];
    } else if (isset($_COOKIE['color'])) {
        echo $_COOKIE['color'];
    }
}
?>