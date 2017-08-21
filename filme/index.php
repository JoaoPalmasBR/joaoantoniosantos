<?php
    /*
    //$path = "C:/wamp64/www/joaoantoniosantos/filme/";
    $path = "/home/joaoa870/public_html/filme/";
    echo $path."<br>";
    $diretorio = dir($path);

    echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
    while($arquivo = $diretorio -> read()){
        if($arquivo=="." or $arquivo==".."){}else{
            echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
        }
    }
    $diretorio -> close();
    */


    /*
    $pasta = "C:/wamp64/www/joaoantoniosantos/filme/";
    //$pasta = "http://joaoantoniosantos.com.br/filme/";
    $arquivos = glob("$pasta{*.mp4}", GLOB_BRACE);
    foreach($arquivos as $img){
        echo "<a href='".$img."' download>".$img."</a><br>";
    }
    */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FILMES</title>
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
        <link rel="shortcut icon" href="favicon.png">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="http://joaoantoniosantos.com.br/filme/">FILMES</a> 
                </div>
            </div>
        </div>
        <div class="container">
            <form class="form-signin" method="GET">
                <div class="list-group">
                    <?php 
                    //$pasta = "C:/wamp64/www/joaoantoniosantos/filme/";
                    $pasta = "/home/joaoa870/public_html/filme/arquivos/";
                    $arquivos = glob("$pasta{*.mp4,*.mkv,*.avi}", GLOB_BRACE);
                    foreach($arquivos as $img){
                        //echo "<a href='".$img."'>".$img."</a><br>";
                        $link = str_replace('C:/wamp64/www/joaoantoniosantos/filme/arquivos/','',$img);
                        $link2 = str_replace('/home/joaoa870/public_html/filme/arquivos/','',$img);
                        $caminhovideo="http://joaoantoniosantos.com.br/filme/arquivos/";
                        //echo '<a href="'.$img.'">'.$link.'</a>';
                        echo '<button type="button" class="list-group-item"> <a href="'.$caminhovideo,$link2.'">'.$link2.'</a></button><br><br>';
                        }
                    ?>
                </div>
            </form>
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