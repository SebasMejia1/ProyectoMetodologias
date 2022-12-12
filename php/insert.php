<?php
include_once './database.php';
$nombreProducto = $_POST['nombreProducto'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];
try {
    $sql = "INSERT INTO productos (nombre, descripcion, categoria, precio, imagen) VALUES (:nombre, :descripcion, :categoria, :precio, :imagen)";
    $query = $conexion->prepare($sql);
    $query->bindParam(':nombre', $nombreProducto);
    $query->bindParam(':descripcion', $descripcion);
    $query->bindParam(':categoria', $categoria);
    $query->bindParam(':precio', $precio);
    $query->bindParam(':imagen', $imagen);
    if ($query->execute()) {
        echo "success";
    } else {
        echo $query->errorInfo();
    }
} catch (Exception $e) {
    echo 'ERROR: ', $e->getMessage();
}
