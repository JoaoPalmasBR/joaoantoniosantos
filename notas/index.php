<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Notas V.1.2</title>
		<meta name="description" content="Calculadora de Notas de Escola/Faculdade.">
		<meta name="author" content="Joao Antonio Santos">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
    		google_ad_client: "ca-pub-7530652275273987",
    		enable_page_level_ads: true
  		});
		</script>
		<link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link rel="shortcut icon" href="img/logo.png" type="image/png">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/logo.png">
        <link rel="apple-touch-icon-precomposed" href="img/logo.png">
        <style>
            body {background-color: whitesmoke !important;}
        </style>
	</head>
	<body>
		<div class="container">
			<?php include 'header.php'; ?>
			<center>
				<form class="form-signin" autocomplete="off" action="calcula.php" method="POST">
					<center><h2 class="form-signin-heading">Notas Online</h2></center>
					<label for="notag1" class="sr-only">Nota de G1:</label>
						<input name="notag1" type="number" class="form-control" placeholder="Nota de 0 a 10.0" autofocus min="0.00" max="10.00" step="0.05">
						<br><br>
					<label for="notag2" class="sr-only">Nota de G2:</label>
						<input name="notag2" type="number" class="form-control" placeholder="Nota de 0 a 10.0" min="0.00" max="10.00" step="0.05">
						<br><br>
        			<button class="btn btn-lg btn-primary btn-block"  name="submit">Calcular</button>
				</form>
			</center>
			<center>
				<button class="btn btn-primary" type="button" disabled>
					<h3>Visitas <span class="badge">
						<h4>
							<?php
								$mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_u_notas','joaoantonio2012','joaoa870_notasonline');
								$query  = "SELECT visitas FROM contador where id=(SELECT max(id) FROM contador)";
								if ($result = $mysqli->query($query)) {
									while ($row = $result->fetch_assoc()){
										$id=$row['visitas'];
										echo $id;
									}
								}
							?>
						</h4>
						</span>
					</h3>
				</button>
			</center>
			<br><br>
			<div class="panel panel-default">
				<div class="panel-body">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- publi notas.joaoantoniosantos.com.br -->
					<ins class="adsbygoogle" style="display:inline-block;width:320px;height:100px"
					data-ad-client="ca-pub-7530652275273987" data-ad-slot="2849799952"></ins>
					<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
  				</div>
			</div>
		</div>
		<center>
			<br>
			<?php include 'footer.php'; ?>
		</center>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-tooltip.js"></script>
        <script src="js/bootstrap-popover.js"></script>
        <script src="js/bootstrap-button.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-carousel.js"></script>
        <script src="js/bootstrap-typeahead.js"></script>
    </body>
</html>