<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Equipe</title>

        <link rel="shortcut icon" href="favicon.ico"/>

        <link rel="stylesheet" href="css/style.css"/>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://malsup.github.com/jquery.cycle2.js"></script>

        <script type="text/javascript" src="js/functions.js"></script>
    </head>

    <body id = "equipe">
        <?php require 'includes/header.html'; ?>
        <div id = "content">
            <div id = "slider" class="cycle-slideshow"
                 data-cycle-fx="fade"
                 data-cycle-speed="2000"
                 data-cycle-timeout="1000"
                 data-cycle-auto-height="0"
                 >
                <!-- Elenco immagini -->
                <img src="img/equipe/01.jpg" alt="slider" />
                <img src="img/equipe/02.jpg" alt="slider" />
                <img src="img/equipe/03.jpg" alt="slider" />
                <img src="img/equipe/04.jpg" alt="slider" />
                <img src="img/equipe/05.jpg" alt="slider" />
                <img src="img/equipe/06.jpg" alt="slider" />

                <!-- Pager -->

                <div class="cycle-pager"></div>
                <div class="fitHeight"></div>
            </div>
            <!-- END slider -->
            <p>La <span style="color: #e30c2e;">Fuoco</span> <span style="color: #439ffc;">Acqua</span> <span style="color: #90ca48;">Terra</span> <span style="color: #f8cf2c;">Aria</span> <span>Società Cooperativa</span> offre ai propri clienti servizi completi legati all’edilizia, l’idraulica e manutenzione del verde.<br/>
                La nostra Cooperativa è formata da artigiani specializzati i quali offrono piena professionalità per i servizi proposti dalla società.<br/>
                L’obiettivo principale della Cooperativa è quello di offrire un servizio completo al cliente, sempre corredato da professionalità e competenza, volto sempre e solo alla totale soddisfazione del committente.
            </p>
            <div id = "images">


                <div id = "1-1"><a href="staff.php"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Staff</p></div><img class = "fading" src = "img/equipe/Staff.jpg" /></a></div>
                <div id = "1-2"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Ufficio</p></div><img  class = "fading" src = "img/equipe/Ufficio.jpg" /></div>
                <div id = "1-3"><div class = "title"><img class="logo" src="img/minilogo.png" /><p>Andora (SV)</p></div><img class = "fading"  src = "img/equipe/Andora.jpg" /></div>
            </div>
            <!-- END images -->
            <div class = "fitHeight"></div>
        </div>
        <!-- END content -->

        <?php require 'includes/footer.html'; ?>

    </body>
    <!-- END home -->
</html>