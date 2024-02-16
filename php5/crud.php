<?php

require_once('funciones.php');
try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=tarea4', 'dwes', 'dwes');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    switch ($_POST['accion']) {
        case 0:
            insertUser($_POST['user'], $_POST['pass'], $_POST['email'], $_POST['id'], $db);
            break;
        
        case 1:
            deleteUser($_POST['id'], $db);
            break;
        case 2:

            break;
    }

} catch (\Throwable $th) {
    //throw $th;
}


