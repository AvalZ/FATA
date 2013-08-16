<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>FATA - Società Cooperativa</title>

        <meta name="description" content="La cooperativa è formata da artigiani specializzati i quali offrono piena professionalità per i servizi proposti dalla società.">

        <link rel="shortcut icon" href="favicon.ico"/>

        <link rel="stylesheet" href="css/style.css"/>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://malsup.github.com/jquery.cycle2.js"></script>

        <script type="text/javascript" src="js/functions.js"></script>
    </head>

    <body id = "home">
        <?php require 'includes/header.html'; ?>
        <div id = "content">
            <!--
            <div id = "slider" class="cycle-slideshow"
                 data-cycle-fx="fade"
                 data-cycle-speed="2000"
                 data-cycle-timeout="1000"
                 data-cycle-auto-height="0"
                 >
            -->
            <div id = "slider" class="cycle-slideshow"
                 data-cycle-fx="fade"
                 data-cycle-speed="1000"
                 data-cycle-manual-speed="200"
                 data-cycle-timeout="2000"
                 data-cycle-auto-height="0"
                 >
                <!-- Elenco immagini -->
                <img src="img/slider1.jpg" alt="slider" />
                <img src="img/slider2.jpg" alt="slider" />
                <img src="img/slider3.jpg" alt="slider" />
                <img src="img/slider4.jpg" alt="slider" />


                <!-- Pager -->

                <p style="float:left;margin-top: 10px;margin-bottom: 0px;margin-left: 10px;font-size: 14px; color: #999;">F.A.T.A. Fuoco Acqua Terra Aria Soc. Cooperativa Artigiana</p><div class="cycle-pager"></div>
                <div class="fitHeight"></div>
            </div>
            <!-- END slider -->
            <div id = "images">
                <div id = "1-1"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Costruzioni</p></div><img class = "fading" src = "img/content1.jpg" /></div>
                <div id = "1-2"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Impiantistica<br/>Idraulica</p></div><img  class = "fading" src = "img/content2.jpg" /></div>
                <div id = "1-3"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Giardinaggio</p></div><img class = "fading"  src = "img/content3.jpg" /></div>
                <div id = "2-1"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Fornitura<br/>e Posa in Opera</p></div><img class = "fading"  src = "img/content4.jpg" /></div>
                <div id = "2-2"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Restauro<br/>facciate</p></div><img class = "fading"  src = "img/content5.jpg" /></div>
                <div id = "2-3"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Proposte<br/>in vendita</p></div><img class = "fading"  src = "img/content6.jpg" /></div>
            </div>
            <!-- END images -->
            <div class = "fitHeight"></div>
        </div>
        <!-- END content -->

        <?php require 'includes/footer.html'; ?>

    </body>
    <!-- END home -->
</html>