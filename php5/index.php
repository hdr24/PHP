<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="login.php" method="post">
        <label>Usuario
            <input type="text" name="user">
        </label>
        <br>
        <label>
            Password
            <input type="password" name="pass" require>
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
    <?php
    session_start();
    if (isset($_GET['error'])) {
        echo '<p style=color:red>Usuario o contrasena incorrecta</p>';
    }
    ?>
</body>

</html>