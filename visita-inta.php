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
    <div class="text-center pt-4 pb-2 font-weight-bold ">
      <p>Hemos escondido una frase secreta por esta web. Dínos por privado en twitch la frase y cómo se consigue para ganar una clave de Steam.<br>Recomendado PC. Hace falta un teclado completo (el teclado numérico no es necesario).</p>
    </div>
    <div id="main-container" class="container">
      <?php getHeader(); ?>

      <div class="container text-justify"> 
        <h1 class="text-center mb-4 mt-5">¿Quieres visitar el INTA?</h1>
        <p>El <a href="http://www.inta.es/" target="_blank" rel="noopener noreferrer">Instituto Nacional de Técnica Aeroespacial</a> «Esteban Terradas» (más conocido como INTA) es un organismo autónomo de España adscrito a la Secretaría de Estado de Defensa del Ministerio de Defensa que intenta suplir la ausencia de una agencia espacial propiamente dicha. El INTA está especializado en la investigación y el desarrollo tecnológico, de carácter dual, en los ámbitos de la aeronáutica, espacio, hidrodinámica, seguridad y defensa.</p>

        <p>Gracias a la <a href="https://psicologia.ucm.es/catedra_ajb" target="_blank" rel="noopener noreferrer">Cátedra Almirante Don Juan de Borbón</a>, resultado del convenio marco entre el Ministerio de Defensa a través del Centro Superior de Estudios de la Defensa Nacional y la Universidad Complutense de Madrid, te ofrecemos la posibilidad de visitar el INTA el viernes 5 de abril.</p>

        <h4 class="text-center my-4 text-warning">Sólo tienes que donar alimentos durante la retransmisión de las siguientes actividades:</h4>
        <h5 class="text-center my-4 text-warning">(Plazas limitadas)</h5>

        <h4 class="text-center mt-5">Viaje con nosotros… por el Sistema Solar</h4>
        <h6>[jueves, 28 de febrero - 14:00-16:00]</h6>
        <p class="mt-4">Embárcate en este vuelo operado por GamersParty por las maravillas del Sistema Solar, en el que visitaremos Marte y Venus usando el simulador "Elite: Dangerous" mientras transportamos un cargamento para el Banco de Alimentos. El comandante, el profesor José Luis Vázquez-Poletti, aprovechará para explicar el trabajo realizado en dichos destinos por las misiones espaciales en las que él participa.</p>

        <h4 class="text-center mt-4 mb-5">Puerta de embarque: Sala de Grados (1ª planta)</h4>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jt-o0TYA3V8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <h4 class="text-center mt-5">Equipo de Titanfall 2 FDI-UCM</h4>
        <h6>[viernes, 1 de marzo - 10:00-13:00]</h6>
        <p class="mt-4 mb-5">Cuando “las ferritas (símbolo de Ingeniería en Informática) caen en el campo de batalla”, el enemigo sabe que sólo tiene una salida: por tierra, mar o aire. Los titanes de la FDI-UCM lucharán para asegurar hasta el último cargamento destinado al Banco de Alimentos desde la Frontera.</p>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dH3BgunIphI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <div id="taller-patrocinadores" class="my-4 text-center">
            <h5 class="mt-5 mb-4">Patrocinadores principales de estas actividades</h5>
            <img class="mx-1" src="images/catedra-juan-borbon.png" alt="Cátedra Don Juan de Borbón" title="Cátedra Don Juan de Borbón">
            <img class="mx-1" src="images/ministerio-defensa.png" alt="Ministerio de Defensa" title="Ministerio de Defensa">
            <img class="mx-1" src="images/ceseden.png" alt="Centro Superior de Estudios de la Defensa Nacional" title="Centro Superior de Estudios de la Defensa Nacional">
            <img class="mx-1" src="images/logo_ieee.jpg" alt="Instituto Español de Estudios Estratégicos" title="Instituto Español de Estudios Estratégicos">
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