<?php
session_start();

$usuario = $_SESSION['nombre'];
$producto = $_POST['txtproducto'];
$total = $_POST['txttotal'];
$direccion = $_POST['txtdireccion'];

$sql = "INSERT INTO pedidos1(usuario,producto,total,direccion)" . "VALUES('$usuario','$producto','$total','$direccion')";


include('conn.php');

if ($conn->query($sql) === TRUE) {
    echo "Se guardaron los datos correctamente!!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: ../pagPrin.php");
    exit;
}

$conn->close();
