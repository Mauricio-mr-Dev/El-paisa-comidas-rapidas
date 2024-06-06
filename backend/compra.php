<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Compra</title>
    <link rel="stylesheet" href="../Estilos/estiloscompra.css">
    <link rel="shortcut icon" href="Img/Logo.png" type="image/x-icon">
</head>

<body>
    <?php
    include('mostrarproductos.php');



    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header('Location: loginuser.html');
        exit;
    }

    ?>
    <div class="form-prin">

        <form action="comprarealizada.php" method="POST">

            <h2>CONFIRMAR COMPRA</h2>


            <label for="txtproducto">Producto:</label>       
            <input class="inpt-details" name="txtproducto" type="text" value="<?php echo $nombre; ?>" readonly> <br><br>

            <label for="txttotal">Total:</label>
            <input class="inpt-details" name="txttotal" type="text" value="<?php echo "    " . $precio; ?>" readonly><br><br>

            <label for="txtdireccion">Direccion:</label>
            <input type="text" name="txtdireccion" value="" require > <br><br>


            <button type="submit">CONFIRMAR</button>

        </form>
    </div>
    
</body>

</html>