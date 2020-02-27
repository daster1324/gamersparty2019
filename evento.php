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
    <div class="d-none text-center pt-4 pb-2 font-weight-bold ">
      <p>Hemos escondido una frase secreta por esta web. Dínos por privado en twitch la frase y cómo se consigue para ganar una clave de Steam.<br>Recomendado PC. Hace falta un teclado completo (el teclado numérico no es necesario).</p>
    </div>
    <div id="main-container" class="container">
      <?php getHeader(); ?>

      <h1 class="mb-3 text-center">El evento</h1>
      <div class="row">
        <div class="col-md-6 text-justify">
          <p>La GamersParty es un evento benéfico organizado por estudiantes y profesores de la Facultad de Informática de la Universidad Complutense de Madrid.</p>
          <p>Nació en 2017 en la que recaudamos casi 1000€ en dinero y juguetes para Juegaterapia. En 2018, se recaudaron más de 600kg de comida que fueron donados al Banco de Alimentos de Madrid. La edición de 2019 fue más breve y, aun así, se lograron recaudar unos 400kg de comida para el BAM</p>
          <p>La GamersParty 2020 viene pisando fuerte, dispuesta a sobrepasar las cifras de las ediciones anteriores. Se celebrará desde el 16 al 20 de marzo desde las 9 hasta las 20 en la Sala de Grados de la Facultad de Informática de la Universidad Complutense de Madrid. Durante esa semana, los voluntarios retransmitirán por Youtube y Twitch cómo tratan de completar videojuegos en tiempo récord.</p>        
          <p>¡Os esperamos!</p>
        </div>
        <div class="col-md-6">
          <img class="img-fluid" src="images/clausura.jpg" alt="Foto. Clausura del evento" title="Clausura del evento">
        </div>
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