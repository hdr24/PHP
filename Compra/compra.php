<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List</title>
  <style>
    table,
    td {
      border: 1px black solid;
      padding: 5px;
    }
  </style>
</head>

<body>
  <?php

  // Insertamos la clase item y las funciones del crud
  require_once("item.php");
  require_once("crud.php");


  // Empezamos la sesion
  session_start();

  if (isset($_SESSION['lista'])) {
    $list = $_SESSION['lista'];
  } else {
    $list = array();
  }

  // Dependiendo de si la opcion es 1-4 se escoge si se muestra, añade, actualiza o borra

  if ($_GET['id'] == '1') {
    show($list);
  }

  if ($_GET['id'] == '2') {
    if ($_POST['name'] == null) {
      echo "You must insert at least the name of the product";
    } else {
      $_SESSION['lista'] = create($list, new item($_POST['name'], $_POST['quant'], $_POST['price']));
      show($_SESSION['lista']);
    }
  }

  if ($_GET['id'] == '3') {
    $_SESSION['lista'] = deleteItem($list, $_POST['id']);
    show($_SESSION['lista']);
  }

  if ($_GET['id'] == '4') {
    $_SESSION['lista'] = update($list, $_POST['id'], $_POST['name'], $_POST['quant'], $_POST['price']);

    show($_SESSION['lista']);
  }




  ?>
  <a href="index.html">Go back</a>
</body>
</html>