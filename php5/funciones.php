<?php

function insertUser($user, $pwd, $email, $id, $db)
{
    try {
        // We use the prepare function to insert the values
        $sql = "INSERT INTO usuarios (usuario, pwd, email, id) VALUES (?,?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$user, crypt($pwd, 'salt'), $email, $id]);
    } catch (\Throwable $th) {
        echo 'Ha ocurrido un error al insertar el usuario, contacte con el administrador';
    }
}

function updateUser($user, $email, $id, $db)
{
    try {
        $db->exec('UPDATE usuarios SET usuario = "'.$user.'", email="'.$email. '" WHERE id='.$id);
    } catch (\Throwable $th) {
        echo 'Ha ocurrido un error al actualizar el usuario, contacte con el administrador';
    }
}

function deleteUser($id, $db)
{
    try {
        $db->exec('DELETE FROM usuarios WHERE id='.$id);
    } catch (\Throwable $th) {
        echo 'Ha ocurrido un error al eliminar, contacte con el administrador';
    }
}

