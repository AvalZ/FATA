<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>FATA - Società Cooperativa</title>

        <link rel="shortcut icon" href="favicon.ico"/>

        <link rel="stylesheet" href="css/style.css"/>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://malsup.github.com/jquery.cycle2.js"></script>

        <script type="text/javascript" src="js/functions.js"></script>
    </head>

    <body id = "servizi">
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
                <img src="img/servizi/1.jpg" alt="slider" />
                <img src="img/servizi/2.jpg" alt="slider" />
                <img src="img/servizi/3.jpg" alt="slider" />
                <img src="img/servizi/4.jpg" alt="slider" />


                <!-- Pager -->

                <p style="float:left;margin-top: 10px;margin-bottom: 0px;margin-left: 10px;font-size: 14px; color: #999;">F.A.T.A. crede nella qualità dell'ambiente lavorativo, investendo in personale qualificato che opera secondo elevati standard<br/>di sicurezza sia personale che ambientale.</p><div class="cycle-pager"></div>
                <div class="fitHeight"></div>
            </div>
            <!-- END slider -->
            <div id = "images">
                <div id = "1-1"><a href="costruzioni.php">
                        <div class = "title">
                            <img class="logo" src="img/minilogo.png" /><p>Costruzioni</p>
                            <br/>
                            <ul>
                                <li>
                                    Civili
                                </li>
                                <li>
                                    Industriali
                                </li>
                                <li>
                                    Stradali
                                </li>
                            </ul>
                        </div><img class = "fading" src = "img/content1.jpg" /></a></div>
                <div id = "1-2">
                    <div class = "title">
                        <img class="logo" src="img/minilogo.png" /><p>Impiantistica<br/>Idraulica</p>
                        <ul>
                            <li>Termoidraulica</li>
                            <li>Solare</li>
                            <li>Centrali Termiche</li>
                            <li>Realizzazione <br/> Contabilizzazione Centralizzata</li>
                        </ul>
                    </div><img  class = "fading" src = "img/content2.jpg" /></div>
                <div id = "1-3">
                    <div class = "title">
                        <img class="logo" src="img/minilogo.png" /><p>Giardinaggio</p><br/>
                        <ul>
                            <li>Progettazione Tree<br/>Climbing</li>
                            <li>Manutenzione</li>
                            <li>Impianti di Irrigazione</li>
                            <li>Giardini Zen</li>
                        </ul>
                    </div><img class = "fading"  src = "img/content3.jpg" /></div>
                <div id = "2-1">
                    <div class = "title">
                        <img class="logo" src="img/minilogo.png" /><p>Fornitura<br/>e Posa in Opera</p>
                        <ul>
                            <li>Tendaggi da sole</li>
                            <li>Serramenti</li>
                            <li>Zanzariere</li>
                            <li>Pavimenti e Rivestimenti</li>
                        </ul>
                    </div><img class = "fading"  src = "img/content4.jpg" /></div>
                <div id = "2-2">
                    <div class = "title">
                        <img class="logo" src="img/minilogo.png" /><p>Restauro<br/>facciate</p>
                        <ul>
                            <li>DECORAZIONI ESTERNE</li>
                            <li>DECORAZIONI ARTISTICHE<br/>TROMPE L’OEIL E PITTURE MURALI</li>
                            <li>RIVESTIMENTI PLASTICI CONTINUI</li>
                            <li>CAPPOTTI</li>
                            <li>INSUFFLAZIONE DI FIBRA DI CELLULOSA</li>
                            <li>IMPERMEABILIZZAZIONI</li>
                        </ul>
                    </div><img class = "fading"  src = "img/content5.jpg" /></div>
                <div id = "2-3">
                    <div class = "title">
                        <img class="logo" src="img/minilogo.png" /><p>Proposte<br/>in vendita</p>
                    </div><img class = "fading"  src = "img/content6.jpg" /></div>
            </div>
            <!-- END images -->
            <div class = "fitHeight"></div>
        </div>
        <!-- END content -->

        <?php require 'includes/footer.html'; ?>

    </body>
    <!-- END home -->
</html>