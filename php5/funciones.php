<?php

function insertUser($user, $pwd, $email, $id, $db)
{
    try {
        $sql = "INSERT INTO usuarios (usuario, pwd, email, id) VALUES (?,?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$user, crypt($pwd, 'salt'), $email, $id]);
    } catch (\Throwable $th) {
        echo  $th->getMessage();
    }
}

function updateUser($user, $pwd, $email, $id, $db)
{
    try {
        $db->exec('UPDATE usuarios SET usuario = "'.$user.'" email="'.$email. '"WHERE id='.$id);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
}

function deleteUser($id, $db)
{
    try {
        $db->exec('DELETE FROM usuarios WHERE id='.$id);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
}

