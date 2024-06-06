<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../Estilos/listarpedidos.css">
    <title>Lista Pedidos</title>
</head>

<body>

    <?php


    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header('Location: ../loginuser.html');
        exit;
    }

    ?>
    <header>
        <div class="cont-header">
            <img class="img-logo" src="../Img/Logo.png" alt="Logo-Pag" />

            <nav class="nav-inf">
                <div>
                    <ul>
                        <a href="../pagPrin.php" style="text-decoration: none;color: white;">Inicio</a>
                        <li><a href="salir.php" style="text-decoration: none; color:white">Cerrar Sesión</a></li>
                    </ul>
                    </ul>
                </div>

            </nav>
        </div>
    </header>


    <div class="cont.form">

        <h1>MIS PEDIDOS</h1>

        <?php
        include('conn.php');
        $sql = "SELECT * FROM pedidos1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        ?>


            <table border="1">

                <thead>

                    <tr>
                        <th colspan="4">DETALLES PEDIDO</th>
                        <th>ESTADO</th>
                        <th>ACCION</th>
                    </tr>

                </thead>


                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <?php

                    ?>
                    <tr>
                        <td> <?php echo $row['usuario'] ?></td>
                        <td> <?php echo $row["producto"] ?></td>
                        <td> <?php echo $row["total"] ?></td>
                        <td> <?php echo $row["direccion"] ?></td>
                        <td> <?php echo $row["estado"] ?></td>
                        <td>
                            <a style="color: white; text-decoration:none;" href="eliminarpedido.php?id=<?php echo $row["id"]?>">Eliminar</a>
                        </td>
                    </tr>
            <?php
                }
            }
            $conn->close();
            ?>
            </table>

    </div>
</body>

</html>