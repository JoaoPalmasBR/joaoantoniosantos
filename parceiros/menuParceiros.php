<?php
    if($_SERVER['SERVER_NAME']=="localhost"){
        echo '
		<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
    		</button>
			<a class="navbar-brand" href="http://localhost/">
				<img src="../img/favicon.png" width="30" height="30" alt="Joao Antonio Santos"> Joao Antonio
			</a>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
        			<li class="nav-item active">
        				<a class="nav-link" href="http://localhost/vamofut">VamoFUT V1.0 <span class="badge badge-info">Desenvolvimento</span><span class="sr-only">(current)</span></a>
						<a class="nav-link" href="http://localhost/notas">Notas Online V1.0 <span class="sr-only">(current)</span></a>
						<a class="nav-link" href="http://localhost/parceiros"><span class="badge badge-pill badge-success">Parceiros TOPPEN</span></a>
        			</li>
        		</ul>
			</div>
		</nav>';
    }
    else{
        echo '
		<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
    		</button>
			<a class="navbar-brand" href="http://joaoantoniosantos.com.br/">
				<img src="../img/favicon.png" width="30" height="30" alt="Joao Antonio Santos"> Joao Antonio
			</a>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
        			<li class="nav-item active">
        				<a class="nav-link" href="http://vamofut.joaoantoniosantos.com.br">VamoFUT V1.0 <span class="badge badge-info">Desenvolvimento</span><span class="sr-only">(current)</span></a>
						<a class="nav-link" href="http://notas.joaoantoniosantos.com.br">Notas Online V1.0 <span class="sr-only">(current)</span></a>
						<a class="nav-link" href="http://parceiros.joaoantoniosantos.com.br"><span class="badge badge-pill badge-success">Parceiros TOPPEN</span></a>
        			</li>
        		</ul>
			</div>
		</nav>';
    }
?>