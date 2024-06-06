<?php

$nombre = $_POST["txtnombre"];
$apellido = $_POST["txtapellido"];
$celular = $_POST["txtcelular"];
$direccion = $_POST["txtdireccion"];
$email = $_POST["txtemail"];
$contraseña = $_POST["txtcontraseña"];


$sql = "INSERT INTO usuarios(nombres,apellidos,celular,direccion,email,contraseña)" . "VALUES('$nombre','$apellido','$celular','$direccion','$email',$contraseña)";

include('conn.php');

if ($conn->query($sql) === TRUE) {
  echo "Se guardaron los datos correctamente!!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("Location: ../loginuser.html");
  exit;
}

$conn->close();
