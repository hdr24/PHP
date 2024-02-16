<?php

require_once('funciones.php');
try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=tarea4', 'dwes', 'dwes');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // The hidden input in every form determines what case of the switch executes
    
    switch ($_POST['accion']) {
        case 0:
            insertUser($_POST['user'], $_POST['pass'], $_POST['email'], $_POST['id'], $db);
            break;
        
        case 1:
            deleteUser($_POST['id'], $db);
            break;
        case 2:
            updateUser($_POST['user'], $_POST['email'], $_POST['id'], $db);
            break;
    }
    header('Location: aplicacion.php');
} catch (\Throwable $th) {
    echo 'Ha ocurrido un error con la base de datos, contacte con el administrador';
}


