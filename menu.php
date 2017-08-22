<?php
    if($_SERVER['SERVER_NAME']=="localhost"){
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true){
			echo '
			<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
    			</button>
				<a class="navbar-brand" href="http://localhost/">
					<img src="img/favicon.png" width="30" height="30" alt="Joao Antonio Santos"> Joao Antonio
				</a>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
        				<li class="nav-item active">
							<a class="nav-link" href="http://localhost/sobre/">Sobre Mim </a>
							<a class="nav-link" href="http://localhost/parceiros/">Parceiros</a>
	        				<a class="nav-link" href="http://localhost/vamofut">VamoFUT V1.0 <span class="badge badge-info">Desenvolvimento</span></a>
							<a class="nav-link" href="http://localhost/notas">Notas Online V1.0 <span class="sr-only">(current)</span></a>
        				</li>
        			</ul>
					<form class="form-inline">
        				<input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
        				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
      				</form>
				</div>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<strong>Oi Visitante!</strong> Este Site ainda se encontra em desenvolvimento, portanto desculpe por qualquer transtorno.
						<br><br>
						(Clique no aviso para fechar)
  					</button>
				</div>
			</nav>';
		}
	    else{
			echo '
			<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
    			<a class="navbar-brand active" href="http://localhost/">Joao Antonio Santos</a>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/sobre/">Sobre Mim</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/parceiros/">Parceiros</a>
					</li>
				</ul>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  	Projetos
					</button>
  					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					  	<h6 class="dropdown-header"><span class="badge badge-info">Desenvolvimento</span></h6>
    					<a class="nav-link" href="http://localhost/vamofut/">
							<button class="dropdown-item" type="button">VamoFUT V1.0</button></a>
						<h6 class="dropdown-header"><span class="badge badge-info">Em USO</span></h6>
    					<a class="nav-link" href="http://localhost/notas/">
							<button class="dropdown-item" type="button">Notas Online V1.0</button>
						</a>
  					</div>
				</div>
      			<form class="form-inline">
        			<input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
        				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
      			</form>
			</nav>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">X</button>
				<strong>Oi Visitante!</strong> Este Site ainda se encontra em desenvolvimento, 
				portanto desculpe por qualquer transtorno.
				<br><br>
				(Clique no X para fechar)
			</div>';
		}
    }
    else{
        $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true){
			echo '
			<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
    			</button>
				<a class="navbar-brand" href="http://joaoantoniosantos.com.br/">
					<img src="img/favicon.png" width="30" height="30" alt="Joao Antonio Santos"> Joao Antonio
				</a>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
        				<li class="nav-item active">
							<a class="nav-link" href="http://joaoantoniosantos.com.br/sobre/">Sobre Mim </a>
							<a class="nav-link" href="http://joaoantoniosantos.com.br/parceiros/">Parceiros</a>
	        				<a class="nav-link" href="http://vamofut.joaoantoniosantos.com.br/">VamoFUT V1.0 <span class="badge badge-info">Desenvolvimento</span></a>
							<a class="nav-link" href="http://notas.joaoantoniosantos.com.br/">Notas Online V1.0 <span class="sr-only">(current)</span></a>
        				</li>
        			</ul>
					<form class="form-inline">
        				<input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
        				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
      				</form>
				</div>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<strong>Oi Visitante!</strong> Este Site ainda se encontra em desenvolvimento, portanto desculpe por qualquer transtorno.
						<br><br>
						(Clique no aviso para fechar)
  					</button>
				</div>
			</nav>';
		}
		else{
			echo '
			<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
    			<a class="navbar-brand active" href="http://joaoantoniosantos.com.br/">Joao Antonio Santos</a>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="http://joaoantoniosantos.com.br/sobre/">Sobre Mim</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://joaoantoniosantos.com.br/parceiros/">Parceiros</a>
					</li>
				</ul>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  	Projetos
					</button>
  					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					  	<h6 class="dropdown-header"><span class="badge badge-info">Desenvolvimento</span></h6>
    					<a class="nav-link" href="http://vamofut.joaoantoniosantos.com.br/">
							<button class="dropdown-item" type="button">VamoFUT V1.0</button></a>
						<h6 class="dropdown-header"><span class="badge badge-info">Em USO</span></h6>
    					<a class="nav-link" href="http://notas.joaoantoniosantos.com.br/">
							<button class="dropdown-item" type="button">Notas Online V1.0</button>
						</a>
  					</div>
				</div>
      			<form class="form-inline">
        			<input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
        				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
      			</form>
			</nav>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">X</button>
				<strong>Oi Visitante!</strong> Este Site ainda se encontra em desenvolvimento, 
				portanto desculpe por qualquer transtorno.
				<br><br>
				(Clique no X para fechar)
			</div>';
		}
    }
?>