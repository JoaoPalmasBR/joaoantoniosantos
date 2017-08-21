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
                    <ul class="nav nav-tabs nav-justified">
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Series <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="filmesdublados.php">Herois</a></li>
                            </ul>
                        </li>
                        <li role="presentation"><a href="filmesdublados.php">Filmes Dublados</a></li>
                        <li role="presentation"><a href="filmeslegendados.php">Filmes Legendados</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="page-header">
                <center><h1>Filmes <small>Dublados</small></h1></center>
            </div>
            
            <?php
            $pasta = "filmes/Dublado/";
            //echo $pasta;
            //$pasta = "/home/joaoa870/public_html/filme/arquivos/";
            $arquivos = glob("$pasta{*.3gp,*.wmv,*.mkv,*.mpg,*.avi,*.mp4}", GLOB_BRACE);
            foreach($arquivos as $link){
                $link1 = str_replace('filmes/Dublado/','',$link);
                echo "
                <div class='col-sm-6 col-md-4'>
                    <div class='thumbnail'>
                        <img alt='250x150' src='arquivos/$link1.jpg' style='height: 250px; width: 150px; display: block;'>
                        
                        <div class='caption'>
                            <h3>$link1</h3>
                            <p><a href='play.php?filme=$link1' class='btn btn-primary' role='button'>Assistir ></a></p>
                        </div>
                    </div>
                </div>";
                    //<div class='well'>
                    //<a href='play.php?filme=$link1'>
                    //$link1<br>
                    //<img src='arquivos/$link1.jpg' alt='$link1' height='250px' width='150px'>
                    //</a></div>
                    //";
            }
            ?>
            
            </div>
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