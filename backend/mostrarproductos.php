<?php
include('conn.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT nombre, precio FROM productos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $fila = $result->fetch_assoc();
        $nombre = $fila['nombre'];
        $precio = $fila['precio'];
        
    } else {
        $nombre = "Producto no encontrado";
        $precio = "Precio no disponible";
    }
} else {
    $nombre = "Producto no seleccionado";
    $precio = "Precio no disponible";
}
