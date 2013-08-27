<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contatti</title>

        <link rel="shortcut icon" href="favicon.ico"/>

        <link rel="stylesheet" href="css/style.css"/>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://malsup.github.com/jquery.cycle2.js"></script>

        <script type="text/javascript" src="js/functions.js"></script>

        <link href="/maps/documentation/javascript/examples/default.css" rel="stylesheet">

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_DbDats_MYK8_WoT2IZvxGLdG6stbqmU&sensor=true"></script>
        <script>
            var map;
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(43.95199, 8.15137),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                            // "Centro" Liguria 44.24520, 8.88245
                            // Via S. Michele, 5, Andora    43.95199, 8.15137
                };
                map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);

                var image = 'img/minilogo.png';
                var FataCoord = new google.maps.LatLng(43.95199, 8.15137);
                var FataMarker = new google.maps.Marker({
                    position: FataCoord,
                    map: map,
                    icon: image
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>
    </head>

    <body id = "contatti">
        <?php require 'includes/header.html'; ?>
        <div id = "content">
            <div id="map-canvas"></div>
            <div class = "fitHeight"></div>
            <!-- END map -->

            <div id="testi" style="padding: 40px;">
                <p style="text-align: center; font-size: 14px; line-height: 24px; color: #999;margin: 40px 0 40px">
                    TEL/FAX (+39) 0182.85156<br/>
                    CONTATTO DIRETTO (+39) 339.2276382<br/>
                    MAIL <a style="text-transform: none; color: #e30c2e" href="mailto:info@fataequipe.com">info@fataequipe.com</a><br/>
                    Via San Michele 5 – 17051 ANDORA (SV)<br/>
                    <br/>
                    <b><span style="color:#e30c2e;">F.</span><span style="color:#439ffc;">A.</span><span style="color:#90ca48;">T.</span><span style="color:#f8cf2c;">A.</span></b><br/>
                    Fuoco Acqua Terra Aria Soc.Cooperativa<br/>
                    partita IVA e codice fiscale 01640680094<br/>
                </p>
            </div>

        </div>
        <!-- END content -->

    </body>
    <!-- END home -->
</html>