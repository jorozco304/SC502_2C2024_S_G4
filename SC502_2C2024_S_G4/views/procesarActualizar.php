<?php
require_once('../controller/productosController.php');
require_once('../model/conexionModel.php');

session_start();


$productosController = new productosController();

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos = [
        'id_producto' => $_POST['id_producto'],
        'especie_cafe' => htmlspecialchars($_POST['especie_cafe']),
        'tipo_proceso' => htmlspecialchars($_POST['tipo_proceso']),
        'tipo_tueste' => htmlspecialchars($_POST['tipo_tueste']),
        'descripcion' => htmlspecialchars($_POST['descripcion']),
        'precio' => htmlspecialchars($_POST['precio']),
        'existencias' => htmlspecialchars($_POST['existencias']),
        'ruta_imagen' => isset($_POST['ruta_imagen']) ? htmlspecialchars($_POST['ruta_imagen']) : '', 
        'activo' => isset($_POST['activo']) ? 1 : 0
    ];

    $resultado = $productosController->actualizarProducto($datos);
    if ($resultado) {
        $message = 'Producto actualizado exitosamente';
    } else {
        $message = 'Error al actualizar el producto';
    }

    header("Location: editarProducto.php?id=" . $datos['id_producto'] . "&message=" . urlencode($message));
    exit();
}

