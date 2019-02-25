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
    <div class="d-none bg-warning text-center pt-4 pb-2 text-dark font-weight-bold ">
      <p>El sitio web sigue en construcción. Estáte pendiente a las RRSS para enterarte de las actualizaciones.</p>
    </div>
    <div id="main-container" class="container">
      <?php getHeader(); ?>

      <div class="container">
        <h1 class="text-center my-4">Game Jam Gamersparty 2019</h1>
        
        <div class="row mt-4">
          <div class="col-md-6">
            <p>¡Vuelven las noches sin dormir!</p>
            <p>¡Vuelven los litros y litros de bebida energética de marca blanca!</p>
            <p>¡Vuelven los bugs que te persiguen hasta en sueños!</p>
            <p>¡Vuelve... la Game Jam de la Gamersparty!</p>

            <h4 class="mt-4">Fechas y lugar</h4>
            <p>La Game Jam tendrá lugar en <a href="http://voxelschool.com/" target="_blank" rel="noopener noreferrer">Voxel School</a> durante los días 1, 2 y 3 de marzo.</p>

            <h4 class="mt-4">Horarios</h4>
            <p>El evento tendrá lugar desde las 17:00 del viernes 1 de marzo hasta las 14:00 del domingo 3. Desde las 0:00 hasta las 7:00 las puertas permanecerán cerradas.</p>

            <h4 class="mt-4">Premios</h4>
            <p>¡Si estás entre los mejores te llevarás uno de los lotes de libros y videojuegos!</p>
          </div>
          <div class="col-md-6">
          <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.942789531659!2d-3.7133645000000004!3d40.432265699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7abdbc285fe3580a!2sVOXEL+SCHOOL!5e0!3m2!1ses!2ses!4v1524081274417" style="border:0" allowfullscreen=""></iframe>
          </div>
        </div>

        <h3 class="text-center mt-5">Participa</h3>
        <p>Las inscripciones se realizan de forma individual y los grupos (a formarse el día de la competición o formados de antes) serán de un máximo de 5 personas.</p>
        <h5 class="text-center mt-5">Costes de inscripción</h5>
        <p>Se deberán abonar como cuota de inscripción 2kg en alimentos no perecederos por participante. Recordamos que la Gamersparty es un evento benéfico en colaboración con el Banco de alimentos de Madrid</p>

        <div class="row text-center">
            <div class="embed-responsive  embed-responsive-16by9 mt-4 d-none d-md-block">
              <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSdaqvlvF1nzmhFyiVYK0-IX3EF0iuAXlm1ErdayGCOYJCQRgw/viewform" frameborder="0"></iframe>
            </div>
            <div class="embed-responsive embed-responsive-1by1 mt-4 d-block d-md-none">
              <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSdaqvlvF1nzmhFyiVYK0-IX3EF0iuAXlm1ErdayGCOYJCQRgw/viewform" frameborder="0"></iframe>
            </div>
        </div>

        <div class="my-5 text-center">
            <h3>¿Sigues con dudas?</h3>
            <p>Aclara tus dudas. <a href="mailto:lagasociacion@gmail.com">Envíanos un correo</a></p>
        </div>

      </div>

      <?php getFooter(); ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/code.js"></script>
  </body>
</html>