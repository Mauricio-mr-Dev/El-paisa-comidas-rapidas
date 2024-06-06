<?php

session_start();

// El código recoge el correo y la contraseña que un usuario escribió en un formulario.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contraseña'];

    // Validar y escapar los datos del usuario (evitar inyección SQL)
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

}

include('conn.php');

//Comprueba en la base de datos si el correo coincide con alguno registrado
$sql = "SELECT email, contraseña,tipo,id,nombres,apellidos FROM usuarios WHERE email =? ";

 // Si encuentra una coincidencia, revisa si la contraseña ingresada coincide con la contraseña registrada en la base de datos:
 if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("s", $correo); 
    $stmt->execute();

    // Vincular el resultado
    $stmt->bind_result($email_db, $contrasena_db,$tipo,$id,$nombres,$apellidos);

   // Si ambas coinciden, redirigimos al usuario a "PagPrin.html," lo que significa que ha iniciado sesión con éxito:
    if ($stmt->fetch() && $contrasena === $contrasena_db) {
        $_SESSION['logged_in'] =true;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['id'] = $id;
        $_SESSION['nombre'] = $nombres;
        $_SESSION['apellido'] = $apellidos;

        //Si el if se cumple Las credenciales son válidas, y se redirigie al usuario
        header('Location: ../pagPrin.php');
        exit;
    }
}
echo "Credenciales incorrectas. Por favor, inténtelo de nuevo.";

$conn->close();

?>