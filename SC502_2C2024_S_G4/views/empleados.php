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
        <button sec:authorize='hasRole("ADMIN")' type="button" class="btn btn-outline-warning btn-block" data-bs-toggle="modal" data-bs-target="#agregarEmpleado">
          <i class="fas fa-plus"></i> Agregar Empleado
        </button>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-header">
            <h4>Empleados</h4>
          </div>
          <div th:if="${Empleados != null and !Empleados.empty}">
            <table class="table table-striped table-hover">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Salario</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Fecha Contratacion</th>
                  <th>Puesto</th>
                  <th>Activo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Juan</td>
                  <td>Pérez</td>
                  <td>$50,000</td>
                  <td>juan.perez@example.com</td>
                  <td>555-1234</td>
                  <td>2020-01-01</td>
                  <td>Ingeniero</td>
                  <td>Si</td>
                  <td><a href="./editarEmpleado.php" class="btn btn-primary">Editar</a> <a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Maria</td>
                  <td>González</td>
                  <td>$40,000</td>
                  <td>maria.gonzalez@example.com</td>
                  <td>555-5678</td>
                  <td>2018-06-01</td>
                  <td>Contadora</td>
                  <td>Si</td>
                  <td><a href="./editarEmpleado.php" class="btn btn-primary">Editar</a> <a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Pedro</td>
                  <td>Rodríguez</td>
                  <td>$60,000</td>
                  <td>pedro.rodriguez@example.com</td>
                  <td>555-9012</td>
                  <td>2019-03-01</td>
                  <td>Gerente</td>
                  <td>No</td>
                  <td><a href="./editarEmpleado.php" class="btn btn-primary">Editar</a> <a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="agregarEmpleado" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-color: black;">
        <h5 class="modal-title ">Agregar Empleado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:gold;"></button>
      </div>
      <form th:action="@{/Empleado/guardar}" th:object="${Empleado}" method="POST" class="was-validated" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" required="true" />
          </div>
          <div class="mb-3">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" required="true" />
          </div>
          <div class="mb-3">
            <label for="salario">Salario</label>
            <input type="number" class="form-control" name="salario" required="true" />
          </div>
          <div class="mb-3">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" name="correo" required="true" />
          </div>
          <div class="mb-3">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" required="true" />
          </div>
          <div class="mb-3">
            <label for="fechaContratacion">Fecha de Contratacion</label>
            <input type="date" class="form-control" name="fechaContratacion" required="true" />
          </div>
          <div class="mb-3">
            <label for="puesto">Puesto</label>
            <input type="text" class="form-control" name="puesto" required="true" />
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
  </div>
  <footer>
    <?php
    include 'footer.php';
    ?>
  </footer>

</body>

</html>