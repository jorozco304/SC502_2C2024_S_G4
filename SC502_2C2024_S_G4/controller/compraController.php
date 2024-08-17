<?php
session_start();
require_once('../model/conexionModel.php');
require_once('../model/carritoModel.php');

function procesarCompra() {
    if (isset($_POST['nombre']) && isset($_POST['apellidos'])) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $fecha = date('Y-m-d');
        $carrito = new carritoModel();
        $precios = $carrito->obtenerPreciosDeProductos();
        $total = $carrito->calcularTotal($precios);

        $sqlFactura = "INSERT INTO factura (nombre, apellidos, fecha, total) VALUES ('$nombre', '$apellidos', '$fecha', $total)";
        $resultadoFactura = conexionModel::execute($sqlFactura);

        if ($resultadoFactura['exito']) {
            $idFactura = mysqli_insert_id($resultadoFactura['conexion']); 

           
            foreach ($_SESSION['carrito'] as $productoId => $cantidad) {
                $precio = $precios[$productoId];
                $sqlVenta = "INSERT INTO venta (id_factura, id_producto, precio, cantidad) VALUES ($idFactura, $productoId, $precio, $cantidad)";
                $resultadoVenta = conexionModel::execute($sqlVenta);

                if ($resultadoVenta['exito']) {
                    $sqlActualizarExistencias = "UPDATE producto SET existencias = existencias - $cantidad WHERE id_producto = $productoId";
                    conexionModel::execute($sqlActualizarExistencias);
                }
            }

            unset($_SESSION['carrito']);

            header('Location: ../views/confirmacionCompra.php');
            exit();
        } else {
            echo "Error al procesar la compra.";
        }
    } else {
        echo "Error: Faltan parámetros en la solicitud POST.";
    }
}

procesarCompra();
?>
