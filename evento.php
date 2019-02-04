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
    <div id="main-container" class="container">
      <?php getHeader(); ?>

      <div class="info-evento container">
        <p>La GamersParty es un evento benéfico organizado por estudiantes y profesores.</p>
        <p>El evento nació en 2017 en la que recaudamos casi 1000€ en dinero y juguetes para Juegaterapia.</p>
        <p>En el 2018 se recaudaron más de 600kg de comida que fueron donados al Banco de Alimentos de Madrid.</p>
        <p>Durante una semana, alumnos y profesores voluntarios tratarán de completar juegos en tiempo record.</p>
        <p>El evento entero será retransmitido a través de las plataformas de YouTube y Twitch.</p>
        <p>La GamersParty 2019 se celebra desde el 25 de febrero al 1 de marzo desde las 9 hasta las 20 en la Sala de Grados de la Facultad de Informática de la Universidad Complutense de Madrid.</p>
        <p>Se sortearán premios entre todos los asistentes y los que nos veáis desde casa.</p>
        <p>¡Os esperamos!</p>
      </div>

      <?php  ?>

      <?php getFooter(); ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>