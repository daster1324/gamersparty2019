<?php

function escupeMeta(){
    $cur = $_SERVER['REQUEST_URI'];
    switch ($cur) {
        case '/speedruns':
            echo "<title>Gamers Party 2020 | Speedruns</title>";
            break;
    
        case '/evento':
            echo "<title>Gamers Party 2020 | El evento</title>";
            break;

        case '/talleres':
            echo "<title>Gamers Party 2020 | Visita el INTA</title>";
            break;

        case '/gamejam':
            echo "<title>Gamers Party 2020 | GameJam</title>";
            break;

        default:
            echo "<title>Gamers Party 2020 | El mayor evento de videojuegos de la UCM</title>";
            break;
    }
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="images/gpty_po.png">

    <meta name="description" content="La Gamers Party 2020 es un evento benéfico organizado por estudiantes y profesores de la UCM para recaudar dinero y alimentos para el banco de alimentos de Madrid" />
    <meta name="robots" content="index,follow" />
    <meta name="keywords" content="gamers, gamer's, party, evento, benefico, banco, alimentos, madrid, ucm, complutense, informatica, speedruns, videojuegos"/>

    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Gamers Party 2020 | El mayor evento de videojuegos de la UCM" />
    <meta property="og:description" content="Evento benéfico del 16 al 20 de marzo de 2020 organizado por estudiantes y profesores de la UCM para recaudar dinero y alimentos para el banco de alimentos de Madrid" />
    <meta property="og:url" content="http://gamersparty.org/" />
    <meta property="og:site_name" content="Gamers Party 2020" />
    <meta property="og:image" content="http://gamersparty.org/images/gpty_po.png" />

    <meta name="twitter:card" content="Speedruns benéficos del 16 al 20 de marzo de 2020 en la UCM."/>
    <meta name="twitter:description" content="Evento benéfico del 16 al 20 de marzo de 2020 organizado por estudiantes y profesores de la UCM para recaudar dinero y alimentos para el banco de alimentos de Madrid"/>
    <meta name="twitter:title" content="GamersParty España"/>
    <meta name="twitter:site" content="@GamersParty_ES"/>
    <meta name="twitter:creator" content="@HumperCobra"/>

    <meta name="google" content="nositelinkssearchbox" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
    "palette": {
        "popup": {
        "background": "#fb5454"
        },
        "button": {
        "background": "#f7f74d"
        }
    },
    "theme": "edgeless",
    "content": {
        "message": "Nos obligan a molestarte con la obviedad de que este sitio utiliza cookies",
        "dismiss": "¡Ok!",
        "link": "Leer más",
        "href": "/cookies"
    }
    })});
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133676835-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-133676835-1');
    </script>

<?php
}