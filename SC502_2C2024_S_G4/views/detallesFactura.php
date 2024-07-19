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

    li span {
      display: inline-block;
      padding: 0 10px;
      margin: 0 10px;
      border: 0px solid #ccc;
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
  <div class="col-md-8 offset-md-3 card text-center w-50 mb-3 mt-3">
    <div class="card-body">
      <h5 class="card-title">Numero Factura</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">Cliente: </h6>
      <ul>
        <li><span>Producto 1</span><span>Cantidad:   </span><span>Total Linea</span></li>
        <li><span>Producto 2</span><span>Cantidad:   </span><span>Total Linea</span></li>
        <li><span>Producto 3</span><span>Cantidad:   </span><span>Total Linea</span></li>
        <li><span>Producto 4</span><span>Cantidad:   </span><span>Total Linea</span></li>
        <li><span>Envío</span><span>Impuesto:   </span><span>Total</span></li>

      </ul>
    </div>
  </div>
  <footer>
    <?php
    include 'footer.php';
    ?>
  </footer>

</body>

</html>