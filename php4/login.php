<?php 

try {
    $dbs = new PDO('mysql:host=localhost;dbname=tarea4', 'dwes', 'dwes');
    $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $list = $dbs->query("SELECT * FROM usuarios WHERE usuario='".$_POST['user']."'");

    foreach ($list as $row) {
        echo $row['usuario'];
        if (password_verify($_POST['password'],$row['pwd'] )) {
            session_start();
            $_SESSION['user'] = $row['usuario'];
            $_SESSION['time'] = time();
            
        } else {
            header('Location: index.php?error=true');
        }
    }

    

} catch (\Throwable $th) {
    //throw $th;
}

?>