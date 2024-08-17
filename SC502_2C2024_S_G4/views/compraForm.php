<!-- compraForm.php -->
<?php
session_start(); // Asegúrate de usar sesiones para gestionar el carrito en memoria
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <div class="container m-5">
        <h2 class="p-4">Formulario de Compra</h2>
        <form action="../controller/compraController.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <button type="submit" class="btn btn-outline-primary">Confirmar Compra</button>
            <a href="carritoView.php" class="btn btn-outline-danger m-4">Regresar</a>
        </form>


    </div>

    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>

</html>