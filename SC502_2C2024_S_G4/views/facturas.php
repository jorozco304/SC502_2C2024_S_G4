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
                  <th>#</th>
                  <th>Número de Factura</th>
                  <th>Cliente</th>
                  <th>Correo</th>
                  <th>Fecha</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>FACT-001</td>
                  <td>Juan Pérez</td>
                  <td>juanperez@example.com</td>
                  <td>2022-01-01</td>
                  <td>$100.00</td>
                  <td><a href="./detallesFactura.php" class="btn btn-primary">Ver detalles</a> </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>FACT-002</td>
                  <td>Maria Rodríguez</td>
                  <td>mariarodriguez@example.com</td>
                  <td>2022-01-15</td>
                  <td>$500.00</td>
                  <td><a href="./detallesFactura.php" class="btn btn-primary">Ver detalles</a></td>
                </tr>
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