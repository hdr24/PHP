<?php
function deleteItem($list, $index) {
    
    // Se libera la posicion del array
    unset($list[$index]);

    // Se mueven todos los valores del array
    $list = array_values($list);

    return $list;
}


function create($list, $item) {
    // Se hace un push con el item que inserte el usuario
        array_push($list, $item);
        return $list;
      
}


function update($list, $index, $name, $quant, $price) {
    
    // Se sobreescribe el item del indice dado
    $list[$index] = new item($name, $quant, $price);

    return $list;
}

// Se crea una tabla que muestra los items de la lista
function show($list) {
    echo "<table style='border: 1px black solid'>";
    echo "<tr> <td>Name</td> <td>Quantity</td> <td>Price</td> <td> Total</td>";
    for ($i = 0; $i < count($list); $i++) {
      echo "<tr><td>" . $list[$i]->get_name() . "</td>";
      echo "<td>" . $list[$i]->get_quant() . "</td>";
      echo "<td>" . $list[$i]->get_price() . "</td>";
      echo "<td>" . Calculate_Total_Price_Product($list[$i]) . "</td></tr>";
    }
    echo"<tr><td>Total</td><td></td><td></td><td>" . Calculate_Total_Purchase_Price($list) . "</td></tr>";
    echo "</table>";
    ;
}

function Calculate_Total_Price_Product($item) {
    // Multiplica la cantidad por el precio del item introducido
    return $item->get_quant()*$item->get_price();
}

function Calculate_Total_Purchase_Price($list) {
    $total = 0;

    foreach ($list as $item) {
        // Calcula el precio de cada producto y lo va sumando`
        $total += Calculate_Total_Price_Product($item);
    }
    return $total;
}
?>