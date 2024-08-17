<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

.header-text {
  color: gold !important;
  transition: color 0.3s ease-in-out !important; 
}

.header-text:hover {
  color: white !important; /* color al pasar el mouse por encima */
}

</style>
  </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <header>
    <nav class="navbar navbar-expand-lg p-3 " style="background-color: black; height: 100px;">
    <a class="navbar-brand header-text" href="./index.php">Gold Coffee</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link header-text" aria-current="page" href="./productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-text" href="./informacion.php">¿Quienes somos?</a>
        </li>
        <li class="nav-item dropdown" style="color: gold;">
          <a class="nav-link dropdown-toggle header-text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Administración
          </a>
          <ul class="dropdown-menu" style="background-color:darkgray;">
            <li><a class="dropdown-item" href="./empleados.php" style="color: black;">Empleados</a></li>
            <li><a class="dropdown-item" href="./facturas.php" style="color: black;">Facturas</a></li>
            <li><a class="dropdown-item" href="./stock.php" style="color: black;">Stock</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" action="index.php" method="GET">
      <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">        
      <button class="btn btn-outline-warning" type="submit">Buscar</button>
      </form>
      <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link header-text" href="carritoView.php" style="color: gold;">
        <i class="fas fa-shopping-cart"></i>
        Carrito
      </a>
    </li>
  </ul>
    </div>
  </div>
</nav>
    </header>

</body>
</html>