<?php

function dbconect($dbname, $user, $pass){
    
}

function insertComerciales($db, $codigo, $nombre, $salario, $hijos, $fnacimiento) {
    $sql = "INSERT INTO comerciales (codigo, nombre, salario, hijos, fNacimiento) VALUES (?,?,?,?,?)";
    $stmt= $db->prepare($sql);
    $stmt->execute([$codigo, $nombre, $salario, $hijos, $fnacimiento]);
}

function insertVentas($db, $codComercial, $refProducto, $cantidad, $fecha) {
    $sql = "INSERT INTO ventas (codComercial, refProducto, cantidad, fecha) VALUES (?,?,?,?)";
    $stmt= $db->prepare($sql);
    $stmt->execute([$codComercial, $refProducto, $cantidad , $fecha]);
}

function insertProductos($db, $referencia, $nombre, $descripcion, $precio, $descuento) {
    $sql = "INSERT INTO productos (referencia, nombre, descripcion, precio, descuento) VALUES (?,?,?,?,?)";
    $stmt= $db->prepare($sql);
    $stmt->execute([$referencia, $nombre, $descripcion, $precio, $descuento]);
}

function consultaComercialDado ($db, $comercial) {
    $sql = "SELECT refProducto, cantidad, fecha from ventas WHERE codComercial = '" . $comercial . "'";
    $list = $db->query($sql);
    echo "<table><tr><td>Producto</td><td>Cantidad</td><td>Fecha</td>";
    foreach ($list as $row) {
        echo"<tr><td>". $row["refProducto"] ."</td><td>". $row["cantidad"]. "</td><td>" . $row["fecha"] . "</td></tr>";
    }
    echo "</table>";
    
}

function consultaVentas ($db, $comercial) {
    $sql = "SELECT refProducto, cantidad, fecha from ventas WHERE codComercial = '" . $comercial . "'";
    $list = $db->query($sql);
    echo "<table><tr><td>Producto</td><td>Cantidad</td><td>Fecha</td>";
    foreach ($list as $row) {
        echo"<tr><td>". $row["refProducto"] ."</td><td>". $row["cantidad"]. "</td><td>" . $row["fecha"] . "</td></tr>";
    }
    echo "</table>";
    
}

?>