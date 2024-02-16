<?php
require 'usuario.php';
session_start();
if (isset($_POST["user"])) {
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=tarea4', 'dwes', 'dwes');
        $lista = $db->query('SELECT * FROM usuarios WHERE usuario="' . $_POST['user'] . '"');
        foreach ($lista as $item) {
            if (password_verify($_POST['pass'], $item['pwd'])) {
                $_SESSION['usuario'] =serialize(new usuario($item['usuario'], $item['email'], $item['id']));
                header('Location: aplicacion.php');
            } else {
                header('Location: index.php?error=true');
            }
        }
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
}