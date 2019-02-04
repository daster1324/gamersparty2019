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

      <div class="container">
      <h2>Parece que esto a hecho ¡pum!</h2>

      <p>Parece que algo ha petado en el servidor. Tenemos a la horda trabajando en ello para tenerlo arreglado cuanto antes.</p>
      <p>Pulsa cualquier botón del menú de arriba para salir de aquí.</p>

      <?php getFooter(); ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/code.js"></script>
  </body>
</html>