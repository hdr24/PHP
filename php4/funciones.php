<?php

function cambiaColor()
{
    // If we sent a post form with the color we update the color
    if (isset($_POST['color'])) {
        $_SESSION['color'] =  $_POST['color'];
        echo $_POST['color'];
        // If not we check if there is a color set and output that color
    } else if (isset($_SESSION['color'])) {
        echo $_SESSION['color'];
    }
    // If there is no color set or form sent nothing is output, making the background white by default
}
?>