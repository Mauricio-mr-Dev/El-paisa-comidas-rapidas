<?php

$id = $_GET['id'];

include('conn.php');

$sql = "DELETE FROM pedidos1 WHERE id = $id"; 

if ($conn->query($sql) === FALSE) {
    echo "Error pag";
  } else {
    header("Location:verpedidos.php");
  }

?>
