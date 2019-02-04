<?php
  include('t_header.php');
  include('meta-creator.php');
  include('t_footer.php');
?>

<!doctype html>
<html lang="es">
  <head>
    <?php escupeMeta(); ?>

  </head>
  <body>
    <div class="bg-warning text-center pt-4 pb-2 text-dark font-weight-bold ">
      <p>El sitio web sigue en construcción. Estáte pendiente a las RRSS para enterarte de las actualizaciones.</p>
    </div>
    <div id="main-container" class="container">
      <?php getHeader(); ?>

      <h1>Speedruns</h1>

      <h4 class="text-center mb-4">¡Ayúdanos a llenar la parrilla!</h4>
      <p>Estamos buscando gente que quiera demostrar lo buena que es en un juego.</p>
      <p>No hace falta que te marques el speedrun del año. También buscamos gente que dé espectáculo</p>
      <p>¿Se te da de miedo algún juego en concreto? No lo dudes y apúntate. ¡Tenemos galletas!</p>

      <p class="mt-5 mb-3">Te dejamos por aquí el formulario de inscripción</p>
      <div class="embed-responsive  embed-responsive-16by9 mt-4 d-none d-md-block">
        <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSfrEKDt83UxEm84neYx-gCmW-ikCIsGK1ae2PmiQalmCwRLJw/viewform" frameborder="0"></iframe>
      </div>
      <div class="embed-responsive embed-responsive-1by1 mt-4 d-block d-md-none">
        <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSfrEKDt83UxEm84neYx-gCmW-ikCIsGK1ae2PmiQalmCwRLJw/viewform" frameborder="0"></iframe>
      </div>
      

      <?php getFooter(); ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>