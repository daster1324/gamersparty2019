<?php

function getHeader(){
    $cur = $_SERVER['REQUEST_URI'];
?>

<div id="logo-container" class="container-fluid text-center my-3">
    <img src="/images/gp2019.png" class="img-fluid " alt="Logo Gamers Party 2019">  
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-transparent my-3">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div id="test" class="navbar-nav nav nav-fill w-100">
        <?php
            if($cur == "/"){
                echo '<a class="nav-item nav-link boton azul active" href="/">Inicio <span class="sr-only">(actual)</span></a>';
            }
            else{
                echo '<a class="nav-item nav-link boton azul" href="/">Inicio</a>';
            }

            if($cur == "/speedruns"){
                echo '<a class="nav-item nav-link boton rojo active" href="/speedruns">Speedruns <span class="sr-only">(actual)</span></a>';
            }
            else{
                echo '<a class="nav-item nav-link boton rojo" href="/speedruns">Speedruns</a>';
            }

            if($cur == "/evento"){
                echo '<a class="nav-item nav-link boton blanco active" href="/evento">El evento <span class="sr-only">(actual)</span></a>';
            }
            else{
                echo '<a class="nav-item nav-link boton blanco" href="/evento">El evento</a>';
            }

            //echo '<a id="donar" class="nav-item nav-link boton azul" href="https://donaciones.gamersparty.org">Donar</a>';

            if($cur == "/visita-inta"){
                echo '<a class="nav-item nav-link boton verde active" href="/visita-inta">Visita el INTA <span class="sr-only">(actual)</span></a>';
            }
            else{
                echo '<a class="nav-item nav-link boton verde" href="/visita-inta">Visita el INTA</a>';
            }

            if($cur == "/gamejam"){
                echo '<a class="nav-item nav-link boton amarillo active" href="/gamejam">Game Jam <span class="sr-only">(actual)</span></a>';
            }
            else{
                echo '<a class="nav-item nav-link boton amarillo" href="/gamejam">Game Jam</a>';
            }
            
        ?>

    </div>
  </div>
</nav>

<?php
}
?>