<?php

require_once('../controller/productosController.php');
require_once('../model/conexionModel.php');

session_start();

$productosController = new productosController();

if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];
    $resultado = $productosController->eliminarProducto($id_producto);

    if ($resultado) {
        $message = 'Producto eliminado exitosamente';
    } else {
        $message = 'Error al eliminar el producto';
    }
} else {
    $message = 'ID de producto no proporcionado';
}

header("Location: stock.php?message=" . urlencode($message));
exit();
?>
