<?php
    include('t_header.php');
    include('meta-creator.php');
    include('t_footer.php');
?>
<html lang="es">
<head>
    <?php escupeMeta(); ?>
</head>
<body>
    <div id="main-container" class="container">
        <?php getHeader(); ?>
        <div class="container text-justif">
            <h1 class="text-center mb-4 mt-5">Inscripción de participantes</h1>
            <p>Si quieres participar con un Speedrun en Gamersparty España, puedes rellenar el siguiente formulario. Nos pondremos en contacto con vosotros.</p>
        </div>

        <iframe class="w-100" src="https://docs.google.com/forms/d/e/1FAIpQLSccL1LWFjwyMz3tuCYCZcT20F1qpySYNsOO1Hsd0k59fZBnRQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0" style="height: 200%;">Cargando…</iframe>
        <?php getFooter(); ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/code.js"></script>
</body>
