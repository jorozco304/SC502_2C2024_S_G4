<!-- confirmacionCompra.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Confirmada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
        <?php include 'header.php'; ?>
    </header>

    <div class="container m-5">
        <h2 class="m-4">Compra Confirmada</h2>
        <p class="m-4">Gracias por su compra. Su pedido ha sido procesado con éxito.</p>
        <a href="index.php" class="btn btn-outline-primary">Volver a la tienda</a>
    </div>

    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>
</html>
