<?php
    $filme=$_GET['filme'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>filmoTEKA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Entregas Avulsas da Impacto Transportes">
        <meta name="author" content="Joao Antonio Santos">
        <!-- Le styles -->
        <link href="bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="bootstrap-responsive.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="html5shiv.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">
        <link rel="icon" type="image/png" href="favicon.png">
    </head>
    <body>
        <div class="navbar navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="http://localhost/joaoantoniosantos/filmoteka/">filmo<b>TEKA</b></a> 
                </div>
            </div>
        </div>
        <div class="container">
            <div>
                <center>
                    <video id="video1" width="720" controls preload="metadata">
                        <?php echo "<source src='arquivos/$filme'>";?>Seu Navegador pode nao Suportar HTML5 video.
                    </video>
                    <br>
                    <button onclick="playPause()">Play/Pause</button> 
                    <button onclick="makeBig()">Maior</button>
                    <button onclick="makeNormal()">Normal</button>
                </center>
            </div>
            <script>
            var myVideo = document.getElementById("video1");
            function playPause() {
                if (myVideo.paused)
                    myVideo.play();
                else
                    myVideo.pause();
            }
            function makeBig() {
                myVideo.width = 720;
            }
            function makeNormal() {
                myVideo.width = 420;
            }
        </script>
        </div> <!-- /container -->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="jquery.js"></script>
        <script src="bootstrap-transition.js"></script>
        <script src="bootstrap-alert.js"></script>
        <script src="bootstrap-modal.js"></script>
        <script src="bootstrap-dropdown.js"></script>
        <script src="bootstrap-scrollspy.js"></script>
        <script src="bootstrap-tab.js"></script>
        <script src="bootstrap-tooltip.js"></script>
        <script src="bootstrap-popover.js"></script>
        <script src="bootstrap-button.js"></script>
        <script src="bootstrap-collapse.js"></script>
        <script src="bootstrap-carousel.js"></script>
        <script src="bootstrap-typeahead.js"></script>
    </body>
</html>