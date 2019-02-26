<?php
  include('t_header.php');
  include('t_speed.php');
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

      <h1 class="text-center mb-3">Speedruns</h1>

      <div class="container-fluid">
        <div id="game-info">

        </div>
        <div id="game-horario" class="row justify-content-between">
          <?php
            $h = new Horario();

            //LUNES
            $h->addDescanso(Horario::lunes, "9:00", "15:00");

            $h->addRun(Horario::lunes, "15:00", "16:00", "Staff", "Preparación", "Preparación del escenario del evento y de todo el material de retransmisión");

            $h->addRun(Horario::lunes, "16:00", "17:00", "Staff", "Inauguración", "Pistoletazo de salida de la GamersParty 2019");

            $h->addRun(Horario::lunes, "17:00", "18:00", "Fer", "Super Hexagon", "Juego musical que pone a prueba la destreza y los reflejos de quien lo juega");

            $h->addRun(Horario::lunes, "18:00", "19:00", "Aitor", "12 is better than 6", "Juego de acción y disparos de perspectiva cenital, con elementos de sigilo, al más puro estilo del Salvaje Oeste.");

            $h->addRun(Horario::lunes, "19:00", "21:00", "Daster", "A Hat in Time", "Juego plataformas 3D que te recordará mucho al Super Mario Sunshine o el Banjo-Kazooie.");
            

            //MARTES
            $h->addRun(Horario::martes, "9:00", "13:00", "Ignacio Ory", "Bioshock 2", "Situado unos 10 años después de los eventos del Bioshock original, los ecos de los pecados pasados vuelven a resonar por las salas de Rapture");

            $h->addRun(Horario::martes, "13:00", "14:00", "Hollywood", "Titan Souls", "Entre nuestro mundo y el mundo más allá se encuentran las Titan Souls, la fuente espiritual y la suma de todos los seres vivos");

            $h->addRun(Horario::martes, "14:00", "15:00", "Godoy", "Out There Somewhere", "Inspirado por Cave Story, Super Metroid y Portal, un explorador se encuentra varado en un peligroso planeta alienígena");

            $h->addRun(Horario::martes, "15:00", "18:00", "Pino", "Dark Souls 2", "Únete al oscuro viaje y experimenta los sobrecogedores encuentros con enemigos, los peligros diabólicos y los desafíos implacables");

            $h->addRun(Horario::martes, "18:00", "19:00", "J. Pablo", "NullpoMino", "Tetris es conocido por todos, pero casi nadie lo domina a la perfección. Yo también me incluyo en ese grupo, solo que algo menos. Caen bloques 2 Fast 2 Furious, ¿qué más quieres?");

            $h->addRun(Horario::martes, "19:00", "20:00", "Diego", "Portal", "Un juego de puzles en 3D donde la física y pensar en portales es lo más importante. Al final habrá tarta (o no)");


            //MIERCOLES
            $h->addRun(Horario::miercoles, "9:00", "11:00", "Pascal", "Crash Bandicoot 3", "Esta vez, Crash cuenta con la ayuda de su hermana Coco para vencer (una vez más) al profesor Neo Cortex.");

            $h->addRun(Horario::miercoles, "11:00", "13:00", "Tú. Sí, tú.", "Torneo Smash Bros", "¡Apúntate y demuestra que no hay quien te eche del escenario!");

            $h->addRun(Horario::miercoles, "13:00", "15:00", "Leila", "LIMBO", "Un niño va en busca de su hermana afrontando los peligros que acechan.");

            $h->addRun(Horario::miercoles, "15:00", "18:00", "Tú. Sí, otra vez.", "Torneo Just Dance", "O 'Justo Danza' como lo llaman nuestros bailarines. ¿Sabes bailar? ¿No? No te preocupes. La cosa es pasárselo bien y, de paso, ganar.");

            $h->addRun(Horario::miercoles, "18:00", "20:00", "Tú. ¿Cómo no?", "Torneo Mario Kart", "200cc. No te digo más.");

            //JUEVES
            $h->addDescanso(Horario::jueves, "9:00", "14:00");

            $h->addRun(Horario::jueves, "14:00", "16:00", "JL Vázquez-Poletti", "Viaje con nosotros… por el Sistema Solar", "Embárcate en este vuelo operado por GamersParty por las maravillas del Sistema Solar, en el que visitaremos Marte y Venus");

            $h->addRun(Horario::jueves, "16:00", "18:00", "¿?", "Carreras", "¿Qué será? ¡Iremos informando!");

            $h->addRun(Horario::jueves, "18:00", "21:00", "Daster", "Metroid Fusion", "Un clásico de GameBoy Advance.<br>Samus continúa sus viajes con una nueva nave y es informada de que una estación en el planeta SR-388 ha sido atacada y no hay transmisiones.");

            //VIERNES
            $h->addDescanso(Horario::viernes, "9:00", "10:00");

            $h->addRun(Horario::viernes, "10:00", "13:00", "TitanfallFDI", "Titanfall 2", "Los titanes de la FDI-UCM lucharán para asegurar hasta el último cargamento destinado al Banco de Alimentos desde la Frontera.");

            $h->addRun(Horario::viernes, "13:00", "15:00", "Viktor y Juan", "TETRIS", "El clásico juego de colocar piezas se transforma en un combate a muerte entre nuestros dos experimentados competidores. Durante dos intensas horas,  el destino decidirá quién de los dos es el verdadero campeón de este feroz juego");

            $h->addRun(Horario::viernes, "15:00", "19:00", "Zero", "Metal Gear Solid 3", "Unión Soviética durante la Guerra Fría. La historia de Snake Eater tiene por protagonista a un espía estadounidense codificado como Naked Snake, cuya misión es rescatar a un científico desertor soviético, destruir un arma militar experimental y asesinar a su antigua mentora.");

            $h->addRun(Horario::viernes, "19:00", "20:00", "Staff", "Clausura", "Terminan los speedrun, pero no la GamersParty. ¡Aun nos queda la GameJam durante el fin de semana!");

            $h->print();
          ?>
        </div>
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
