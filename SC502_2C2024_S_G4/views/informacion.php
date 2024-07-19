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
    h1, h2, h3, h4, h5, h6, p, ul, li {
      font-family: "Quicksand", sans-serif;
      color:aliceblue !important;
    }
    body {
      background-color: #222 !important;
    }
    .titleBrand{
    color: gold !important;
    }
    .golden-line {
  border: none;
  border-top: 1px solid #F8E231; 
  margin: 20px 0;
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

  <h1 class="display-3 text-center titleBrand mt-4">GOLD COFFEE</h1>
  <h4 class="text-center titleBrand">¿Quienes somos?</h4>
  <section id="conozcanos" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h1 class="mb-4">Historia</h1>
          <p>En el corazón de Costa Rica, en la región de Tarrazú, se encuentra la finca cafetera de Gold Coffee. La historia de esta productora de café comienza en la década de 1990, cuando un grupo de agricultores locales decidieron unirse para crear una cooperativa que les permitiera producir y comercializar su café de alta calidad.
            La finca de Gold Coffee se encuentra en una zona privilegiada, con suelos fértiles y un clima ideal para el cultivo del café. Los agricultores de la cooperativa trabajan arduamente para producir café de alta calidad, utilizando técnicas sostenibles y respetuosas con el medio ambiente.</p>
        </div>
      </div>
    <div class="row mt-5">
  <div class="col-md-6">
    <hr class="golden-line">
    <h2>Nuestra Misión</h2>
    <p>"Nuestra misión es crear una experiencia de café única y agradable, mientras trabajamos para reducir, reutilizar y reciclar, y apoyamos a las comunidades locales y a los productores de café sostenibles."</p>
  </div>
  <div class="col-md-6">
    <hr class="golden-line">
    <h2>Nuestra Visión</h2>
    <p>"Nuestra visión es ser un líder en la industria del café, conocido por nuestra pasión por la sostenibilidad, la calidad y la innovación, y por nuestro compromiso con la creación de un futuro más próspero y sostenible para todos."</p>
  </div>
</div>

      <div class="row mt-5">
        <div class="col-lg-8 mx-auto text-center">
        <hr class="golden-line">
          <h2>Descubre el origen de nuestro café</h2>
          <p>En Gold Coffee, estamos orgullosos de nuestro compromiso con la sostenibilidad y la calidad. ¡Y queremos compartirlo contigo!</p>
          <p>Únete a nosotros en una visita guiada a nuestros cafetales, donde podrás ver de cerca cómo cultivamos y procesamos nuestro café de alta calidad. Descubre cómo nuestro equipo de expertos trabaja arduamente para asegurarse de que cada grano de café sea seleccionado y procesado con cuidado.
            Para asi descubrir como desde la mata llega hasta tu hogar</p>
          <h2>Reserva tu cita hoy mismo</h2>
          <p>Envianos un correo en el siguiente apartado con tu correo y el día de interes de la visita</p>
        </div>
      </div>
    </div>
  </section>


  <section class="contactanos text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
        <hr class="golden-line">
          <h1>Contactanos:</h1>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Asunto:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="button" class="btn btn-outline-warning mb-4">
            Send
          </button>
        </div>
      </div>
    </div>
  </section>


</div>
<footer>
  <?php
    include 'footer.php';
    ?>
</footer>
    
</body>
</html>