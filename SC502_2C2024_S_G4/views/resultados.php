<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la búsqueda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            font-family: "Quicksand", sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <div class="container">
        <h2 class="text-center my-4">Resultados de la búsqueda</h2>
        <?php if (!empty($resultados)): ?>
            <div class="row flex-wrap m-4">
                <?php foreach ($resultados as $producto): ?>
                    <div class="col-md-4">
                        <div class="card m-2">
                            <img src="<?= $producto['ruta_imagen'] ?>" class="card-img-top w-50 mx-auto pt-4" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $producto['descripcion'] ?></h5>
                                <h5>$<?= $producto['precio'] ?> </h5>
                                <h5>Existencias: <?= $producto['existencias'] ?> </h5>
                                <ul>
                                    <li>Tipo especie: <?= $producto['especie_cafe'] ?></li>
                                    <li>Tipo tueste: <?= $producto['tipo_tueste'] ?></li>
                                    <li>Tipo proceso: <?= $producto['tipo_proceso'] ?></li>
                                </ul>
                                <div class="d-flex justify-content-center mt-3">
                                <form action="../controller/carritoController.php" method="post">
                  <input type="hidden" name="producto_id" value="<?= htmlspecialchars($producto['id_producto']) ?>">
                  <input type="hidden" name="cantidad" value="1">
                  <button type="submit" class="btn btn-outline-primary">Agregar al Carrito</button>
                </form>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No se encontraron resultados.</p>
        <?php endif; ?>
    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>