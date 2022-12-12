<?php
include_once './database.php';
try {
    $sql = "SELECT * from productos";
    $query = $conexion->prepare($sql);
    if ($query->execute()) {
        $mostrarProducto = $query->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($mostrarProducto);
        echo $json;
    } else {
        echo $query->errorInfo();
    }
} catch (Exception $e) {
    echo 'ERROR: ', $e->getMessage();
}
