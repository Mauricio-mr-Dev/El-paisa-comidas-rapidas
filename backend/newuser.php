<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../Estilos/cssRegister.css" />
    <title>Registrarme</title>

</head>

<body>
    <div class="cont-form">

        <form action="regisuser.php" method="POST">

            <h1>INGRESA LOS DATOS</h1>

            <label for="nombres">Nombre:</label>
            <input type="text" name="txtnombre"> <br><br>

            <label for="apellidos">Apellido:</label>
            <input type="text" name="txtapellido"><br><br>

            <label for="celular">Celular:</label>
            <input type="text" name="txtcelular"><br><br>

            <label for="direcciones">Direccion:</label>
            <input type="text" name="txtdireccion"> <br><br>

            <label for="email">Email:</label>
            <input type="text" name="txtemail"> <br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="text" name="txtcontraseña">

            <br><br>

            <button type="submit" class="btn-pedi" value="">Confirmar Registro</button>

        </form>
</body>
</div>



</html>