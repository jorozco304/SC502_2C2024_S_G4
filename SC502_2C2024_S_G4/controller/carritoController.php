<?php

require_once('../model/carritoModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    agregarProducto();
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['action']) && $_GET['action'] === 'eliminar') {
        eliminarProducto();
    }
}

function agregarProducto() {
    if (isset($_POST['producto_id']) && isset($_POST['cantidad'])) {
        $productoId = (int)$_POST['producto_id'];
        $cantidad = (int)$_POST['cantidad'];

        echo "Producto ID: $productoId<br>";
        echo "Cantidad: $cantidad<br>";

        $carrito = new carritoModel();
        $carrito->agregarAlCarrito($productoId, $cantidad);

        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '../index.php';
        header('Location: ' . $referer);
        exit();
    } else {
        echo "Error: Faltan parámetros en la solicitud POST.";
    }
}

function eliminarProducto() {
    if (isset($_GET['producto_id'])) {
        $productoId = (int)$_GET['producto_id'];

        $carrito = new carritoModel();
        $carrito->eliminarDelCarrito($productoId);

        header('Location: ../views/carritoView.php');
        exit();
    } else {
        echo "Error: Faltan parámetros en la solicitud GET.";
    }
}

?>
