<?php
require_once('../controller/productosController.php');

session_start();

if (isset($_GET['search'])) {
  $termino = $_GET['search'];
  $resultados = productosController::buscarProductos($termino);
  include 'resultados.php';
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

  <h1 class="display-1 text-center">GOLD COFFEE</h1>
  <h1 class="display-6 text-center">De nuestras manos hasta tu hogar</h1>
  <div id="carouselExample" class="carousel slide w-75 mx-auto m-5">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://micostaricadeantano.com/wp-content/uploads/2022/09/historia01.webp?w=1000" class="d-block w-100 rounded" alt="..." height="400px;">
      </div>
      <div class="carousel-item">
        <img src="https://perfectdailygrind.com/es/wp-content/uploads/sites/2/2021/02/finca-de-cafe%CC%81-grande-Cover.jpg" class="d-block w-100 rounded" alt="..." height="400px;">
      </div>
      <div class="carousel-item">
        <img src="https://perfectdailygrind.com/es/wp-content/uploads/sites/2/2021/02/finca-de-cafe%CC%81-grande-1.jpg" class="d-block w-100 rounded" alt="..." height="400px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="card m-4 w-75 mx-auto text-center border border-0">
    <div class="card-body" style="font-size: 1.30rem; font-family: Arial, Helvetica, sans-serif;">
      <p>Gold Coffee no es solo una bebida deliciosa, sino que también tiene varios microbeneficios que lo convierten en una excelente opción para los amantes del café. Uno de los microbeneficios es que es fuente sostenible, lo que significa que las granjas que cultivan los granos de café se comprometen a preservar los suelos fértiles y las aguas cristalinas.
        Esto no solo ayuda al medio ambiente, sino que también garantiza que los granos de café sean de alta calidad.</p>
    </div>
  </div>
  <div class="m-3 divCard  text-center">
    <div class="row flex-wrap">
      <h3 class="text-center">Algunos de nuestros productos</h3>
      <div class="col-md-4">
        <div class="card mx-auto">
          <img src="https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/602fdb33f4915e0590c89b1c_Coffee---Cerro-Verde-Costa-Rica--tipicaM.png" class="card-img-top w-50 mx-auto" alt="...">
          <div class="card-body">
            <h5 class="card-title">TYPICA M</h5>
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalTypicaM">Más información</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mx-auto">
          <img src="https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/6054d21869098eade05b67c6_Coffee---Cerro-Verde-Costa-Rica--Caturra.png" class="card-img-top w-50 mx-auto" alt="...">
          <div class="card-body">
            <h5 class="card-title">CATURRA - CATUAÍ ROJO</h5>
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalCaturra">Más información</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mx-auto">
          <img src="https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/602d7d40e98d252e3ca88796_Coffee%20-%20Cerro%20Verde%20Costa%20Rica%20-%20Catuai%20Rojo-p-800.png" class="card-img-top w-50 mx-auto" alt="...">
          <div class="card-body mx-auto">
            <h5 class="card-title">CATUAÍ ROJO</h5>
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalCatuai">Más información</button>
          </div>
        </div>
      </div>
      <div class="text-center m-4 mx-auto">
        <a href="./productos.php" class="btn btn-outline-primary w-25 text-center">Ver más</a>
      </div>
    </div>
  
    <div class="modal fade" id="modalTypicaM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">TYPICA M</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul>
              <li>Variedad Typica Mejorado .</li>
              <li>Secado 100% al sol en camas africanas .</li>
              <li>Recolección en su punto óptimo de maduración.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalCaturra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">CATURRA-CATUAÍ ROJO</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul>
              <li>Variedad Caturra - Catuaí Rojo.</li>
              <li>Altitud 1650 m.s.n.m.</li>
              <li>Proceso Miel -Yellow Honey.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalCatuai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">CATUAÍ ROJO</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul>
              <li>Variedad Catuaí Rojo.</li>
              <li>Altitud 1930 m.s.n.m.</li>
              <li>Proceso Lavado - White Honey.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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