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

            <div id="description">
                <h2>Civili</h2>
                <p>under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction</p>
                <h2>Industriali</h2>
                <p>under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction</p>
                <h2>Stradali</h2>
                <p>under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction under_construction</p>
                <div class = "fitHeight"></div>
            </div>
            <!-- END description -->
        </div>
        <!-- END content -->

        <?php require 'includes/footer.html'; ?>

    </body>
    <!-- END home -->
</html>