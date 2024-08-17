<?php

require_once('../controller/facturasController.php');

session_start();

$view_facturas = facturasController::view_get_facturas();
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
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4 mt-4">
          <div class="card-header">
            <h4>Facturas</h4>
          </div>
          <div th:if="${Facturas != null and !Facturas.empty}">
            <table class="table table-striped table-hover">
              <thead class="table-dark">
                <tr>
                  <th>Número de Factura</th>
                  <th>Nombre Cliente</th>
                  <th>Apellidos Cliente</th>
                  <th>Fecha</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach ($view_facturas as $user) {

                ?>
                  <tr>
                    <th scope="row"><?= $user['id_factura'] ?></th>
                    <td><?= $user['nombre'] ?></td>
                    <td><?= $user['apellidos'] ?></td>
                    <td><?= $user['fecha'] ?></td>
                    <td>$<?= $user['total'] ?></td>
                    <td><a href="./detallesFactura.php?id_factura=<?= $user['id_factura'] ?>" class="btn btn-primary">Ver detalles</a></td>
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

  </div>
  </div>
  <footer>
    <?php
    include 'footer.php';
    ?>
  </footer>

</body>

</html>