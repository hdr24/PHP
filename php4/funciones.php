<?php

function cambiaColor()
{
    if (isset($_POST['color'])) {
        $_SESSION['color'] =  $_POST['color'];
        echo $_POST['color'];
    } else if (isset($_SESSION['color'])) {
        echo $_SESSION['color'];
    }
}
?>