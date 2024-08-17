<?php

require_once('../controller/productosController.php');

$view_productos = productosController::view_get_ProductosActivos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <header>
    <?php include 'header.php'; ?>
  </header>

  <h1 class="display-1 text-center">GOLD COFFEE</h1>
  <h1 class="display-6 text-center">Nuestros Productos</h1>

  <div class="m-3 divCard text-center">
    <div class="row flex-wrap m-4">
      <?php foreach ($view_productos as $producto): ?>
        <div class="col-md-4">
          <div class="card m-2">
            <img src="<?= htmlspecialchars($producto['ruta_imagen']) ?>" class="card-img-top w-50 mx-auto pt-4" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($producto['descripcion']) ?></h5>
              <h5>$<?= number_format($producto['precio'], 2) ?> </h5>
              <h5>Existencias: <?= htmlspecialchars($producto['existencias']) ?> </h5>
              <ul>
                <li>Tipo especie: <?= htmlspecialchars($producto['especie_cafe']) ?></li>
                <li>Tipo tueste: <?= htmlspecialchars($producto['tipo_tueste']) ?></li>
                <li>Tipo proceso: <?= htmlspecialchars($producto['tipo_proceso']) ?></li>
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
  </div>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

</body>

</html>
