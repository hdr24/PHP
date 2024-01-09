<?php 

// This file is in between index and our app pages, it helps us log in without bloating the index page with code
try {
    $dbs = new PDO('mysql:host=localhost;dbname=tarea4', 'dwes', 'dwes');
    $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $list = $dbs->query("SELECT * FROM usuarios WHERE usuario='".$_POST['user']."'");

    foreach ($list as $row) {
        echo $row['usuario'];
        // We verify if the password sent through post is the same as the password in the database
        if (password_verify($_POST['password'],$row['pwd'] )) {
            session_start();
            $_SESSION['user'] = $row['usuario'];
            $_SESSION['time'] = time();
            header('Location: aplicacion.php');
            // If it's the same we store the username and the login time and redirect to the app
        } else {
            // If it's wrong we redirect back to index with a get variable to display an error message
            header('Location: index.php?error=true');
        }
    }

    

} catch (\Throwable $th) {
    echo 'Ha ocurrido un error, contacte con el administrador';
}

?>