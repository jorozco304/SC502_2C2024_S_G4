<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>header</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .footer-text {
      color: gold;
      transition: color 0.3s ease-in-out;
    }

    .footer-text:hover {
      color: white;
    }
  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <footer class="text-center text-lg-start bg-body-tertiary text-muted">

    <section class="p-3" style="color: gold;background-color: black; border-radius: 10px;">
      <div class="container text-center text-md-start mt-5">

        <div class="row mt-3">

          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>GOLD COFFEE
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>


          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="background-color:black;">

            <h6 class="text-uppercase fw-bold mb-4">
              Visita:
            </h6>
            <p>
              <a href="./productos.php" class="footer-text">Nuestros Productos</a>
            </p>
            <p>
              <a href="./informacion.php" class="footer-text">Sobre Nosotros</a>
            </p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Costa Rica, Tarrazú</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              <a href="mailto:goldcoffee@gmail.com" style="color: inherit; text-decoration: none;">goldcoffee@gmail.com</a>
            </p>
            <p><i class="fas fa-phone me-3"></i> +506 8765 4532</p>
            <p><i class="fas fa-print me-3"></i> 2546 6564</p>
          </div>

        </div>

      </div>

      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color: black ;">

        <div class="me-5 d-none d-lg-block" style="color: gold;">
          <span>Visita nuestras redes sociales:</span>
        </div>
        <div class=" p-4" style="color:gold;">
          © 2024 GOLD COFFEE Copyright
          <a class="text-reset fw-bold" href=""></a>
        </div>
        <div style="color: gold;">
          <a href="https://www.facebook.com/" class="me-4 footer-text">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://x.com/" class="me-4 footer-text">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://workspace.google.com/" class="me-4 footer-text">
            <i class="fab fa-google"></i>
          </a>
          <a href="https://www.instagram.com/" class="me-4 footer-text">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/" class="me-4 footer-text">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>

      </section>
    </section>


  </footer>

</body>

</html>