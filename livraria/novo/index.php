<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Livraria da Glaucia">
        <meta name="author" content="Joao Antonio Santos">
        <link rel="icon" href="../img/favicon.ico">
        <title>Livraria da Glaucia</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../css/album.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
			      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        	  </button>
        	  <a class="navbar-brand" href="http://joaoantoniosantos.com.br/livraria/">Livraria da Glaucia</a>
              <!--<a class="navbar-brand" href="http://localhost/livraria/">Livraria da Glaucia</a>-->
        	  <div class="collapse navbar-collapse" id="navbarCollapse">
          		  <ul class="navbar-nav mr-auto">
        			      <li class="nav-item active">
        				        <a class="nav-link" href="http://joaoantoniosantos.com.br/livraria/novo/">Novo <span class="sr-only">(current)</span></a>
                                <!--<a class="nav-link" href="http://localhost/livraria/novo/">Novo <span class="sr-only">(current)</span></a>-->
        			      </li>
        		    </ul>
        		    <form class="form-inline mt-2 mt-md-0">
        			      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
        			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        		    </form>
        	  </div>
        </nav>
        <br>
        <form action="novo.php" method="POST">
            <div class="album text-muted">
                <div class="container">
                    <h3>Nome do Livro</h3>
                    <div class="input-group">
                        <input name="nome" type="text" class="form-control" placeholder="Nome do Livro" aria-describedby="basic-addon1">
                    </div>
                    <hr>
                    <h3>Codigo de Barras do Livro</h3>
                    <center><button type="button" class="btn btn-secondary"><h4><a href="http://zxing.appspot.com/scan?ret=http://www.auere.com.br/testes/barcode.php?codigo={CODE}">Leitor</a></h4></button></center>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Codigo" aria-describedby="basic-addon1" name="codigo">
                    </div>
                </div>
            </div>
        </form>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="">Visit the homepage</a> or read our <a href="">getting started guide</a>.</p>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/holder.min.js"></script>
        <script>
          $(function () {
            Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
          });
        </script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>