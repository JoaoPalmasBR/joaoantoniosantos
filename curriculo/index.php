<?php
	
?>
<!DOCTYPE html>
<html lang=pt>
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="description" content="Gerador de Curriculos">
    	<meta name="author" content="Joao Antonio Santos">
    	<link rel="icon" href="img/favicon.ico">
    	<title>Curriculo 1.0</title>
    	<!-- Bootstrap core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<!-- Custom styles for this template -->
    	<link href="navbar-top-fixed.css" rel="stylesheet">
    </head>
	<body>
		<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
        	</button>
        	<a class="navbar-brand" href="#">Curriculo</a>
        	<div class="collapse navbar-collapse" id="navbarCollapse">
        		<ul class="navbar-nav mr-auto">
        			<li class="nav-item active">
        				<a class="nav-link" href="http://curriculo.joaoantoniosantos.com.br/">Novo <span class="sr-only">(current)</span></a>
        			</li>
        		</ul>
        		<form class="form-inline mt-2 mt-md-0">
        			<input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
        			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        		</form>
        	</div>
        </nav>
        <div class="container">
		    <!--
		    IDENTIFICAÇÃO

		    //Nome
		    //Sexo
		    //Data de Nascimento - Idade
		    //Naturalidade
		    //Email
		    //CPF
		    RG - Data de Expedição
		    ESTADO CIVIL: ( ) SOLTEIRO ( ) CASADO ( ) VIUVO ( ) DIVORCIADO ( ) OUTROS . ESPECIFIQUE
		    POSSUI DEFICIÊNCIA: ( ) NÃO ( ) SIM - ESPECIFIQUE: ( ) FÍSICA ( ) AUDITIVA ( ) VISUAL ( ) INTELECTUAL (MENTAL)
		    TITULO DE ELEITOR: Nº: ZONA: SEÇÃO:
		    CERT. RESERVISTA:
		    Cart. Profissional - Cart. de Trabalho - Série
		    Cart. de Habilitação - Categoria - Data de Vencimento
		 	Telefone Residencial
		 	Telefone Celular
		 	Nome da Mãe - Profissão
		 	Nome do Pai - Profissão
		 	-->
		 	<form action="" method="POST">
		 		<fieldset class="jumbotron">
		 			<legend><center>IDENTIFICAÇÃO</center></legend>
		 			<div class="input-group">
		 				<span class="input-group-addon" id="basic-addon1">Nome:</span>
		 				<input type="text" class="form-control col-md-4" placeholder="Nome Completo" aria-describedby="basic-addon2" id="nome" name="nome">
		 			</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Sexo:</span>
						<span class="input-group-addon" id="basic-addon2">
							<input type="radio" id="sexo" name="sexo" value="Masculino"> Masculino
						</span>
						<span class="input-group-addon" id="basic-addon2">
							<input type="radio" id="sexo" name="sexo" value="Feminino"> Feminino
						</span>
					</div>
					<br>
					<div class="input-group">
						<div class="input-group">
      						<span class="input-group-addon" id="basic-addon1">Data de Nascimento:</span>
      						<input type="text" max="1950-12-31" name="datanascimento" id="datanascimento" min="2017-06-01" class="form-control col-md-4" pattern="\d{2}\/\d{2}/\d{4}" placeholder="DD/MM/AAAA">
    					</div>
  					</div>
  					<br>
  					<div class="input-group">
  						<span class="input-group-addon" id="basic-addon1">Naturalidade</span>
		 				<input type="text" class="form-control col-md-4" placeholder="Cidade - Estado" aria-describedby="basic-addon2" id="naturalidade" name="naturalidade">
		 			</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">E-mail:</span>
		 				<input type="email" name="email" id="email" placeholder="E-mail" class="form-control col-md-4">
		 			</div>
		 			<br>
		 			<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">CPF:</span>
		 				<input type="text" name="cpf" if="cpf" placeholder="CPF" class="form-control col-md-4" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
		 			</div>
		 			<br>
		 			<div class="input-group">

		 			</div>
	 			</fieldset>
	 			<div class="input-group" role="group" aria-label="Large button group">
	 				<button type="submit" class="btn btn-default col-md-4 btn-success">Gerar</button>
	 			</div>
	 			<br>
	 			<div class="input-group" role="group" aria-label="Large button group">
		 			<button type="reset" class="btn btn-default col-md-4 btn-danger">Limpar</button>
	 			</div>
 			</form>
 	<!--
    	<div class="input-group input-group-lg">
		  	<span class="input-group-addon" id="sizing-addon1">@</span>
		  	<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
		</div>
		<br>
		<div class="input-group">
		  	<span class="input-group-addon" id="sizing-addon2">@</span>
		  	<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
		</div>
		

	    <div class="input-group">
	    	<span class="input-group-addon" id="basic-addon1">@</span>
		  	<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
		  	<input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
		  	<span class="input-group-addon" id="basic-addon2">@example.com</span>
		</div>
		<br>
			<label for="basic-url">Your vanity URL</label>
			<div class="input-group">
		  	<span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
		  	<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
		</div>
		<br>
		<div class="input-group">
		  	<span class="input-group-addon">$</span>
		  	<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
		  	<span class="input-group-addon">.00</span>
		</div>
		<br>
		<div class="input-group">
		  	<span class="input-group-addon">$</span>
		  	<span class="input-group-addon">0.00</span>
		  	<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
		</div>
		

		<div class="row">
		  	<div class="col-lg-6">
		    	<div class="input-group">
		      		<span class="input-group-addon">
		        	<input type="checkbox" aria-label="Checkbox for following text input">
		      		</span>
		      		<input type="text" class="form-control" aria-label="Text input with checkbox">
			    </div>
		  	</div>
		  	<div class="col-lg-6">
		    	<div class="input-group">
		      		<span class="input-group-addon">
		        	<input type="radio" aria-label="Radio button for following text input">
		      		</span>
		      		<input type="text" class="form-control" aria-label="Text input with radio button">
		    	</div>
		  	</div>
		</div>
	</div>
	-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
