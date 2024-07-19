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
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Precio</th>
                  <th>Existencias</th>
                  <th>Imagen</th>
                  <th>Activo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Espresso</td>
                  <td>Café fuerte y concentrado</td>
                  <td>$1.50</td>
                  <td>100</td>
                  <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-pesjWnkw4noNqA1WXxZ8ZbbGeTo_KCnMyg&s" alt="" width="150" height="100"></td>
                  <td>Si</td>
                  <td><a href="./editarProducto.php" class="btn btn-primary">Editar</a> <a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Café con Leche</td>
                  <td>Café suave con leche caliente</td>
                  <td>$2.50</td>
                  <td>50</td>
                  <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-pesjWnkw4noNqA1WXxZ8ZbbGeTo_KCnMyg&s" alt="" width="150" height="100"></td>
                  <td>Si</td>
                  <td><a href="#" class="btn btn-primary">Editar</a> <a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Cappuccino</td>
                  <td>Café espresso con leche y espuma</td>
                  <td>$3.50</td>
                  <td>20</td>
                  <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-pesjWnkw4noNqA1WXxZ8ZbbGeTo_KCnMyg&s" alt="" width="150" height="100"></td>
                  <td>Si</td>
                  <td><a href="./editarProducto.php" class="btn btn-primary">Editar</a> <a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Mocha</td>
                  <td>Café espresso con chocolate y leche</td>
                  <td>$4.00</td>
                  <td>30</td>
                  <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-pesjWnkw4noNqA1WXxZ8ZbbGeTo_KCnMyg&s" alt="" width="150" height="100"></td>
                  <td>Si</td>
                  <td><a href="./editarProducto.php" class="btn btn-primary">Editar</a> <a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="agregarProducto" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header text-white" style="background-color: black;">
          <h5 class="modal-title " >Agregar Prodcuto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:gold;"></button>
        </div>
        <form th:action="@{/producto/guardar}" th:object="${producto}" method="POST" class="was-validated" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
            <div class="mb-3">
              <label for="codigo">Código</label>
              <input type="number" class="form-control" name="codigo" required="true" />
            </div>
            </div>
            <div class="mb-3">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" required="true" />
            </div>
            <div class="mb-3">
              <label for="descripcion">Descripción</label>
              <textarea class="form-control" name="descripcion" required="true"></textarea>
            </div>
            <div class="mb-3">
              <label for="precio">Precio</label>
              <input type="number" class="form-control" name="precio" required="true" />
            </div>
            <div class="mb-3">
              <label for="categoria">Existencias</label>
              <input type="number" class="form-control" name="existencias" required="true" />
            </div>
            <div class="mb-3">
              <label for="imagen">Imagen Producto</label>
              <input class="form-control" type="file" name="imagenFile" onchange="readURL(this);" />
              <img id="blah" src="#" alt="your image" height="200" />
            </div>
            <div class="mb-3">
              <label for="activo">Activo</label>
              <input class="form-check-input" type="checkbox" name="activo" id="activo" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Guardar</button>
          </div>
        </form>
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