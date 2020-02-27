<?php

function getHeader(){
    $cur = $_SERVER['REQUEST_URI'];
?>

<div id="logo-container" class="container-fluid text-center my-5">
    <h1 id="gpty-title" class="text-center"><span class="flickering-1">G</span>P<span class="flickering-2">T</span>Y</h1>
    <h1 id="gpty-name" class="text-center"><span class="flickering-4">G</span>AM<span class="flickering-1">E</span>R<span class="flickering-3">S</span>P<span class="flickering-2">A</span>RT<span class="flickering-5">Y</span> <span class="pulsating">2<span class="flickering-2">0</span>2<span class="flickering-2">0</span></span></h1>

</div>

<nav class="navbar navbar-expand-md navbar-dark bg-transparent my-3">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div id="test" class="navbar-nav nav nav-fill w-100">
        <?php
            $menu = [
                # [href, name, class, <id>]
                ["/", "Inicio", "azul"],
                # ["/speedruns", "Speedruns", "rojo"],
                ["/evento", "El evento", "blanco"],
                ["/participa", "Participa", "amarillo"],
                # ["/donar", "Donar", "azul", "donar"],
                # ["/visita-inta", "Visita inta", "verde"],
                # ["/gamejam", "Game Jam", "amarillo"]
            ];
            $formatstring = '<a %s class="nav-item nav-link boton %s" href="%s">%s</a>';

            foreach ($menu as $item) {
                echo sprintf($formatstring,
                    (count($item) >= 4)?('id="'.$item[3].'"'):"",
                    $item[2].(($cur == $item[0])?" active":""), 
                    $item[0],
                    $item[1]).(($cur==$item[0])?'<span class="sr-only">(actual)</span>':'');
            }
        ?>

    </div>
  </div>
</nav>

<?php
}
?>
