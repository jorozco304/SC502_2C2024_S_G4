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
  h1, h2, h3, h4, h5, h6, p {
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
  <h1 class="display-6 text-center">Nuestros Productos</h1>
  
<div class="m-3 divCard  text-center">
  <div class="row flex-wrap m-4">
    <div class="col-md-4">
      <div class="card mx-auto">
        <img src="https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/602fdb33f4915e0590c89b1c_Coffee---Cerro-Verde-Costa-Rica--tipicaM.png" class="card-img-top w-50 mx-auto" alt="...">
        <div class="card-body">
          <h5 class="card-title">TYPICA M 200gr</h5>
          <h6>Precio: </h6>
          <ul>
          <li>Variedad Typica Mejorado.</li>
          <li>Secado 100% al sol en camas africanas .</li>
          <li>Recolección en su punto óptimo de maduración.</li>
        </ul>
          <button type="button" class="btn btn-outline-primary">Comprar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mx-auto">
        <img src="https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/6054d21869098eade05b67c6_Coffee---Cerro-Verde-Costa-Rica--Caturra.png" class="card-img-top w-50 mx-auto" alt="..." >
        <div class="card-body">
          <h5 class="card-title">CATURRA - CATUAÍ ROJO 200gr</h5>
          <h6>Precio: </h6>
          <ul>
          <li>Variedad Caturra - Catuaí Rojo.</li>
          <li>Altitud 1650 m.s.n.m.</li>
          <li>Proceso Miel -Yellow Honey.</li>
        </ul>
          <button type="button" class="btn btn-outline-primary">Comprar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mx-auto">
        <img src="https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/602d7d40e98d252e3ca88796_Coffee%20-%20Cerro%20Verde%20Costa%20Rica%20-%20Catuai%20Rojo-p-800.png" class="card-img-top w-50 mx-auto" alt="..." >
        <div class="card-body mx-auto">
          <h5 class="card-title">CATUAÍ ROJO 200gr</h5>
          <h6>Precio: </h6>
         <ul>
          <li>Variedad Catuaí Rojo.</li>
          <li>Altitud 1930 m.s.n.m.</li>
          <li>Proceso Lavado - White Honey.</li>
        </ul>
          <button type="button" class="btn btn-outline-primary">Comprar</button>
        </div>
      </div>
    </div>
  </div>
  </div>
<div>
  <footer>
  <?php
    include 'footer.php';
    ?>
  </footer>
</div>
    
</body>
</html>