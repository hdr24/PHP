<?php
session_start();
// We set the user value to an empty string
$_SESSION['usuario'] = '';
header('Location: index.php');