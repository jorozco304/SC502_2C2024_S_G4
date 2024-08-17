<?php
require_once('../controller/facturasController.php');

if (isset($_GET['id_factura'])) {
    $id_factura = intval($_GET['id_factura']);
    $detalle_factura = facturasController::view_get_detalle_factura($id_factura);
} else {
    die("Error: ID de factura no especificado.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Factura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
        h1, h2, h3, h4, h5, h6, p {
            font-family: "Quicksand", sans-serif;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 mt-4">
                    <div class="card-header">
                        <h4>Detalles de la Factura #<?= htmlspecialchars($id_factura) ?></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php foreach ($detalle_factura as $item): ?>
                                <li class="list-group-item">
                                    <span>Producto:&nbsp;&nbsp;<?= htmlspecialchars($item['producto']) ?> &nbsp;&nbsp;&nbsp;&nbsp;</span> 
                                    <span>Cantidad:&nbsp;&nbsp;<?= htmlspecialchars($item['cantidad']) ?>&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                                    <span>Total Línea:&nbsp;&nbsp;$<?= number_format($item['total_linea'], 2) ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="facturas.php" class="btn btn-outline-danger m-4">Regresar</a>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
