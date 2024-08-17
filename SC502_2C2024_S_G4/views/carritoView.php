<?php
require_once('../model/carritoModel.php');
require_once('../controller/productosController.php');

$carrito = new carritoModel();
$contenidoCarrito = $carrito->obtenerCarrito();
$precios = $carrito->obtenerPreciosDeProductos();
$total = $carrito->calcularTotal($precios);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<header>
    <?php include 'header.php'; ?>
</header>

<body>
    <div class="container">
        <h2 class="text-center m-4">Carrito de Compras</h2>

        <?php if (!empty($contenidoCarrito)): ?>
            <table class="table table-striped m-4">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contenidoCarrito as $productoId => $cantidad): ?>
                        <?php
                        $producto = productosController::obtenerInformacionDelProducto($productoId);
                        $totalProducto = $precios[$productoId] * $cantidad;
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($producto['descripcion']) ?></td>
                            <td>$<?= number_format($precios[$productoId], 2) ?></td>
                            <td><?= $cantidad ?></td>
                            <td>$<?= number_format($totalProducto, 2) ?></td>
                            <td>
                                <a href="../controller/carritoController.php?producto_id=<?= $productoId ?>&action=eliminar" class="btn btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h4 class="m-5">Total: $<?= number_format($total, 2) ?></h4>
            <div class="text-end m-1">
                <a href="productos.php" class="btn btn-outline-danger m-2">Regresar</a>
                <a href="compraForm.php" class="btn btn-outline-warning m-2">Comprar</a>
            </div>
        <?php else: ?>
            <p class="text-center m-4">El carrito está vacío.</p>
        <?php endif; ?>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</body>

</html>