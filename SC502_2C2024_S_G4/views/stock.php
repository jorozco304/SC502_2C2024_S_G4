<?php

require_once('../controller/productosController.php');

session_start();

$view_productos = productosController::view_get_Productos();

$productoController = new productosController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $datos = [
    'especie_cafe' => htmlspecialchars($_POST['especie_cafe']),
    'tipo_proceso' => htmlspecialchars($_POST['tipo_proceso']),
    'tipo_tueste' => htmlspecialchars($_POST['tipo_tueste']),
    'descripcion' => htmlspecialchars($_POST['descripcion']),
    'precio' => htmlspecialchars($_POST['precio']),
    'existencias' => htmlspecialchars($_POST['existencias']),
    'ruta_imagen' => htmlspecialchars($_POST['ruta_imagen']),
    'activo' => isset($_POST['activo']) ? 1 : 0
  ];

  if ($productoController->agregarProducto($datos)) {
    $message = 'Producto agregado exitosamente';
  } else {
    $message = 'Error al agregar el producto';
  }
}

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
    <?php
    include 'header.php'
    ?>
  </header>
  <div class="container py-4 mb-4">
    <div class="row">
      <div class="col-md-3">
        <button sec:authorize='hasRole("ADMIN")' type="button" class="btn btn-outline-warning btn-block" data-bs-toggle="modal" data-bs-target="#agregarProducto">
          <i class="fas fa-plus"></i> Agregar Producto
        </button>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-header">
            <h4>Productos</h4>
          </div>
          <div th:if="${productos != null and !productos.empty}">
            <table class="table table-striped table-hover">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Descripción</th>
                  <th>Precio</th>
                  <th>Existencias</th>
                  <th>Tipo tueste</th>
                  <th>Procesado</th>
                  <th>Especie</th>
                  <th>Activo</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php
                foreach ($view_productos as $user) {

                ?>
                  <tr>
                    <th scope="row"><?= $user['id_producto'] ?></th>
                    <td><?= $user['descripcion'] ?></td>
                    <td><?= $user['precio'] ?></td>
                    <td><?= $user['existencias'] ?></td>
                    <td><?= $user['tipo_tueste'] ?></td>
                    <td><?= $user['tipo_proceso'] ?></td>
                    <td><?= $user['especie_cafe'] ?></td>
                    <td><?= $user['activo'] ? 'Si' : 'No' ?></td>
                    <td>
                      <a href="./editarProducto.php?id=<?= $user['id_producto'] ?>" class="btn btn-outline-primary">Editar</a>
                      <a href="./procesarEliminar.php?id=<?= $user['id_producto'] ?>" class="btn btn-outline-danger">Eliminar</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="agregarProducto" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content m-3">
        <div class="modal-header text-white" style="background-color: black;">
          <h5 class="modal-title ">Agregar Prodcuto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:gold;"></button>
        </div>
        <div class="m-3">
          <form action="stock.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="especie_cafe" class="form-label">Especie de Café</label>
              <input type="text" class="form-control" id="especie_cafe" name="especie_cafe" required>
            </div>
            <div class="mb-3">
              <label for="tipo_proceso" class="form-label">Tipo de Proceso</label>
              <input type="text" class="form-control" id="tipo_proceso" name="tipo_proceso" required>
            </div>
            <div class="mb-3">
              <label for="tipo_tueste" class="form-label">Tipo de Tueste</label>
              <input type="text" class="form-control" id="tipo_tueste" name="tipo_tueste" required>
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="mb-3">
              <label for="existencias" class="form-label">Existencias</label>
              <input type="number" class="form-control" id="existencias" name="existencias" required>
            </div>
            <div class="mb-3">
              <label for="ruta_imagen" class="form-label">Ruta Imagen</label>
              <input type="text" class="form-control" id="ruta_imagen" name="ruta_imagen">
            </div>
            <div class="mb-3">
              <label for="activo" class="form-check-label">Activo</label>
              <input type="checkbox" class="form-check-input" id="activo" name="activo">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageModalLabel">Resultado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php if (isset($message)) : ?>
            <?= htmlspecialchars($message) ?>
          <?php endif; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
      if (<?= json_encode(isset($message) && !empty($message)) ?>) {
        messageModal.show();
      }
    });
  </script>
  <footer>
    <?php
    include 'footer.php';
    ?>
  </footer>

</body>

</html>