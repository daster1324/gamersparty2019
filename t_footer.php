<?php

function getFooter(){
	$cur = $_SERVER['REQUEST_URI'];
?>
    <!-- Footer -->
    <footer class="container my-4">
		<div id="sponsor-container" class="text-center mb-3">
		  <p class="mt-5 mb-3">Todo este evento no sería posible sin la generosa colaboración de nuestros patrocinadores</p>
		  <img class="mx-3 my-3" src="images/ucm-logo-normalized.png" alt="Universidad Complutense de Madrid" title="Universidad Complutense de Madrid">
		  <img class="mx-3 my-3" src="images/partners-upcoming.png" alt="Próximamente, los patrocinadores" title="Próximamente, los patrocinadores">
		</div>

		<div class="row">
			<div class="col-sm-6" id="copyright-footer">
                <span title="Salvo los de la plantilla">&copy; 2020 GamersParty - Todos los derechos reservados</span><br>
                <span id="enlace-cookies"><a href="/cookies" target="_blank" rel="noopener noreferrer">Política de Privacidad y Cookies</a></span>
            </div>
			<div class="col-sm-6" id="rrss-footer">
				<a class="rrss" id="rrss-yt" href="https://www.youtube.com/channel/UCeXt_iivD794LQR_ZIiOvEg"><i class="fa fa-youtube"></i></a>
				<a class="rrss" id="rrss-tt" href="https://twitter.com/GamersParty_ES"><i class="fa fa-twitter"></i></a>
				<a class="rrss" id="rrss-tw" href="https://www.twitch.tv/gamersparty_es"><i class="fa fa-twitch"></i></a>
			</div>
        </div>
	</footer>
	<script src="/js/code.js"></script>
<?php
}