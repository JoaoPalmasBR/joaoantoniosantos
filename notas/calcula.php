<?php
    if($_POST['notag1']=="" && $_POST['notag2']==""){
        // g1 e G2 em branco
        echo "
        <script type='text/javascript'>
            alert('CAMPO DE NOTA G1 e  G2 VAZIOS!');
            window.location.assign('http://notas.joaoantoniosantos.com.br/');
        </script>";
    }
    else{
        if($_POST['notag1']==""){
            // g1 em branco
            echo "<script type='text/javascript'>
            alert('CAMPO DE NOTA G1 VAZIO!');
            window.location.assign('http://notas.joaoantoniosantos.com.br/');
            </script>";
            
        }
        // g1 preenchida
        else{
            $g1=$_POST['notag1'];
            if($_POST['notag2']==""){
                $precisa_g2;
                $precisa_g2=(18-$g1)/2;
                $resultado="Precisa tirar <b style='color:red;'>".$precisa_g2."</b> em G2 para <br>
                ir com média 6.";
            }
            else{
                $g2=$_POST['notag2'];
                $nota_parcial=round(($g1+($g2*2))/3,2);
                
                $resultado="<h4>Sua nota Semestral é:</h4> <h2>$nota_parcial</h2>";
                if($nota_parcial<6){
                    $subg1=round(((6+($g2*2))/3),2);
                    $subg2=round((($g1+(6*2))/3),2);
                    $resultado .= " <br>
                                    <h3>Voce Precisa Fazer Sub.</h3>
                                    <br>";
                    $resultado .= " <div class='panel panel-default'>
                                        <table class='table'>
                                            <tr>
                                                <td><h4>Substituindo G1 e Tirar 6:</h4></td>
                                                <td><h3>$subg1</h3></td>
                                            </tr>
                                            <tr>
                                                <td><h4>Substituindo G2 e Tirar 6:</h4></td>
                                                <td><h3>$subg2</h3></td>
                                            </tr>
                                        </table>
                                    </div>";
                }
                else{
                    $resultado .= "
                    <br>
                    <div class='alert alert-info' role='alert'>
                        <p>
                            <h2>Voce está aprovado direto.</h2>
                        </p>
                    </div>";
                }
            }
        }
        $mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_u_notas','joaoantonio2012','joaoa870_notasonline');
        $query  = "SELECT visitas FROM contador where id=(SELECT max(id) FROM contador)";
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()){
                $visitas=$row['visitas'];
            }
        }
        $visitas=$visitas+1;
        $today =  date("Y/n/j H:i:s");
        $query="INSERT INTO contador(visitas,data) VALUES ('$visitas','$today')";
        $mysqli->query($query);
    }
?>
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
                <?php echo $resultado; ?>
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