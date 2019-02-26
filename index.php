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

      <div class="container">
        <h2 class="text-center mb-4">Volvemos del 25/02 al 1/03</h2>
        <h5 class="text-center my-4" id="timer"></h5>

        <p>Así es. Vuelve el evento benéfico para echar una mano al Banco de Alimentos de Madrid.</p>
        <p>Nuestros runners estarán toda la semana demostrando cómo de rápido se pueden pasar sus juegos favoritos para ofrecer espectáculo.</p>
        
        <p>¿Contamos con tu aportación este año?</p>
      </div>

      <div class="container">
        <div id="twitch-frame"></div>
      </div> 

      <p class="mt-5 mb-3">Y, ahora, sin más dilación, el vídeo promocional.</p>
      <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rdEmI77q7eI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <?php getFooter(); ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/code.js"></script>

    <script src="https://embed.twitch.tv/embed/v1.js"></script>
		<script type="text/javascript">

				var embed = new Twitch.Embed("twitch-frame", {
					width: "100%",
					channel: "gamersparty_es",
					layout: "video",
					autoplay: false
				});

				embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
					var player = embed.getPlayer();
					player.pause();
				});

		//Redimensiona el tamaño del frame para ajustarlo a las pantallas
			$(function(){
				var $window = $(window).on('resize', function(){
					var iframe = $("#stream-frame > iframe");
					$(iframe).height($(iframe).width()*(9/16)+40);
				}).trigger('resize'); //on page load
			});

			$(function(){
				var $window = $(window).on('resize', function(){
					var iframe = $("#twitch-frame > iframe");
					$(iframe).height($(iframe).width()*(9/16)+40);
				}).trigger('resize'); //on page load
			});
      </script>  
  </body>
</html>