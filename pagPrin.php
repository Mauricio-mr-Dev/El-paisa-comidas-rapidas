<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link rel="stylesheet" href="Estilos/cssPagPrin.css" />
  <link rel="shortcut icon" href="Img/Logo.png" type="image/x-icon">
</head>

<body>

  <?php


  session_start();

  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: loginuser.html');
    exit;
  }

  ?>

  <header id="head-enc">
    <div class="cont-header">
      <img class="img-logo" src="img/Logo.png" alt="Logo-Pag" />

      <nav class="nav-inf">

        <div class="cont">
          <ul>
            <?php
            if ($_SESSION['logged_in'] == true && $_SESSION['tipo'] == 'ADMINISTRADOR') {

            ?>
              <li><a href="verpedidos.php" style="text-decoration: none; color:white">productos</a></li>
            <?php } ?>

            <?php
            if ($_SESSION['logged_in'] == true && $_SESSION['tipo'] == 'ADMINISTRADOR') {

            ?>
             <li><a href="backend/verpedidos.php" style="text-decoration: none; color:white">Pedidos</a></li>
            <?php } ?>

            <?php
            if ($_SESSION['logged_in'] == true && $_SESSION['tipo'] == 'CLIENTE') {

            ?>
             <li><a href="backend/verpedidos.php" style="text-decoration: none; color:white">Mis pedidos</a></li>
             
            <?php } ?>
            <li><a href="backend/salir.php" style="text-decoration: none; color:white;" class="salir-pag">Salir</a></li>
          </ul>

        </div>

        <div class="info-user">
          <img src="Img/avatar.png" width="20px" height="20px" style="padding:3px;" alt="">

          <span class="span-info-user"><?php echo $_SESSION['nombre'] ?> <?php echo $_SESSION['apellido'] ?></span>

        </div>

      </nav>
    </div>
  </header>


  <div class="body-pag" id="divPrin">
    <div class="menu">
      <div class="fila">
        <div class="img-men">
          <h1>Hamburguesa Especial</h5>
            <h3>$18.000</h3>
            <br>
            <img src="Img/img.men1.jpg" alt="" width="80px" />
            <br><br>
            
            <form method="post" action="backend/compra.php?id=1">
              <input type="hidden" name="comprar" value="1">
              <button type="submit">Comprar</button>
            </form>
        </div>
        <br><br>
        <div class="img-men">
          <h1>Perro Caliente</h5>
            <h3>$12.000</h3>
            <br>
            <img src="Img/img-men2.jpg" alt="" width=80px" /> <br><br>
            <form method="post" action="backend/compra.php?id=2">
              <input type="hidden" name="comprar" value="2">
              <button type="submit">Comprar</button>
            </form>
        </div>
        <br><br>
        <div class="img-men">
          <h1>Hamburguesa Triple</h5>
            <h3>$25.000</h3>
            <br>
            <img src="Img/img.men3.jpg" alt="" width="80px" /> <br><br>
            <form method="post" action="backend/compra.php?id=3">
              <input type="hidden" name="comprar" value="3">
              <button type="submit">Comprar</button>
            </form>
        </div>
        <br><br>
      </div>
      <div class="fila">

        <h1>Perro Especial</h5>
          <h3>$15.000</h3>
          <br>
          <div class="img-men">
            <img src="Img/img-men4.jpg  " alt="" width="80px" /> <br><br>
            <form method="post" action="backend/compra.php?id=4">
              <input type="hidden" name="comprar" value="4">
              <button type="submit">Comprar</button>
            </form>
          </div>
          <br><br>
          <div class="img-men">
            <h1>Hamburgesa Sencilla</h5>
              <h3>$13.000</h3>
              <br>
              <img src="Img/imgg-men5.jpg" alt="" width="80px" /> <br><br>
              <form method="post" action="backend/compra.php?id=5">
                <input type="hidden" name="comprar" value="5">
                <button type="submit">Comprar</button>
              </form>
          </div>
          <br><br>
          <div class="img-men">
            <h1>Combo</h1>
            <h3>$30.000</h3>
            <br>
            <img src="Img/img.men6.jpg" alt="" width="80px" /> <br><br>
            <form method="post" action="backend/compra.php?id=6">
              <input type="hidden" name="comprar" value="6">
              <button type="submit">Comprar</button>


            </form>
          </div>
      </div>
    </div>

  </div>


  <!--
  <?php
  // if ($_SESSION['logged_in'] == true && $_SESSION['tipo'] == 'ADMINISTRADOR') {

  ?>

    <h2>Agregar Nuevo Producto</h2>

    <form action="backend/upload.php" method="post" enctype="multipart/form-data">
      Seleccionar Imagen <br>
      <input type="file" name="fileToUpload" id="fileToUpload"> <br>

      <input type="submit" value="Subir Imagen" name="submit">
    </form> -->



  <?php //} ?>



  <!-- Script para cuando hago scroll hacia arriba se me muestre -->
  <script>
    var prevScrollPos = window.pageYOffset; // Guarda la posición inicial del scroll

    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollPos > currentScrollPos) {
        document.getElementById("head-enc").style.top = "0";
      } else {
        document.getElementById("head-enc").style.top = "-100px"; // Oculta el encabezado al hacer scroll hacia abajo
      }
      prevScrollPos = currentScrollPos;
    }
  </script>

</body>

</html>