<?php

    // ========INSERCION=========

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



    // ========= CONSULTAS =========

function consultaComercialDado ($db, $comercial) {
    $sql = "SELECT refProducto, cantidad, fecha from ventas WHERE codComercial = '" . $comercial . "'";
    $list = $db->query($sql);
    echo "<table><tr><td>Producto</td><td>Cantidad</td><td>Fecha</td>";
    foreach ($list as $row) {
        echo"<tr><td>". $row["refProducto"] ."</td><td>". $row["cantidad"]. "</td><td>" . $row["fecha"] . "</td></tr>";
    }
    echo "</table>";
}

function consultaVentas ($db) {
    $sql = "SELECT * from ventas";
    $list = $db->query($sql);
    echo "<table><tr><td>CodComercial</td><td>refProducto</td><td>Cantidad</td><td>Fecha</td>";
    foreach ($list as $row) {
        echo"<tr><td>" . $row["codComercial"] ."</td><td>". $row["refProducto"] ."</td><td>". $row["cantidad"]. "</td><td>" . $row["fecha"] . "</td></tr>";
    }
    echo "</table>";
}

function consultaComerciales ($db) {
    $sql = "SELECT * from comerciales";
    $list = $db->query($sql);
    echo "<table><tr><td>Codigo</td><td>Nombre</td><td>Salario</td><td>Hijos</td><td>fNacimiento</td></tr>";
    foreach ($list as $row) {
        echo"<tr><td>" . $row["codigo"] ."</td><td>". $row["nombre"] ."</td><td>". $row["salario"]. "</td><td>" . $row["hijos"] . "</td><td>" . $row["fNacimiento"] . "</td></tr>";
    }
    echo "</table>";
}

function consultaProductos ($db) {
    $sql = "SELECT * from productos";
    $list = $db->query($sql);
    echo "<table><tr><td>Referencia</td><td>Nombre</td><td>Descripcion</td><td>Precio</td><td>Descuento</td></tr>";
    foreach ($list as $row) {
        echo"<tr><td>" . $row["referencia"] ."</td><td>". $row["nombre"] ."</td><td>". $row["descripcion"]. "</td><td>" . $row["precio"] . "</td><td>" . $row["descuento"] . "</td></tr>";
    }
    echo "</table>";
}

?>