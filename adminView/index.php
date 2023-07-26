

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>administrateur</title>

	<link rel="shortcut icon" href="assets/images/PHP-logo.svg.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Acceuil</a></li>
					<li><a href="#">A propos</a></li>
					
					<li><a href="#">Contact</a></li>
					<li><a class="btn" href="index.php"> Se connecter </a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Acceuil</a></li>
			<li class="active">Se connecter</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Se connecter</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Connectez votre compte</h3>
							<hr>
							
							<form method="post" action="./controllers/connexion.php">
								<div class="top-margin">
									<label>Matricule <span class="text-danger">*</span></label>
									<input type="text"  name="matricule" class="form-control">
								</div>
								<div class="top-margin">
									<label>mot de passe <span class="text-danger">*</span></label>
									<input type="password" name="MDP" class="form-control">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="inscription.php">S'inscrire</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<input class="btn btn-action" name="valider" value="Se connecter" type="submit"/>
									</div>
								</div>
                                <?php
                                    if(isset($inconnu)){echo $inconnu;}
                                ?>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>Votre administrateur<br>
								SOURABIE Prosper-Adrien<br> 
								 
								+226 63 00 40 06<br>
								<a href="mailto:#">kamon.sourabie22@inphb.ci</a>
								
							</p>
							<p>Votre directeur d'école<br> 
								KOUAKOU Amoa Hermann<br> 
								
								+225 07 48 73 96 01<br>
								<a href="mailto:#">amoa.kouakou19@inphb.ci</a>
								
							</p>
							
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Suivez nous</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Bienvenue sur notre site web d'apprentissage !</h3>
						<div class="widget-body">
							<p>Nous sommes ravis de vous accueillir dans notre communauté dédiée à l'apprentissage. Notre mission est de vous fournir les outils, les ressources et les connaissances nécessaires pour vous aider à atteindre vos objectifs d'apprentissage, que ce soit dans le cadre de votre carrière, de vos études ou simplement par curiosité intellectuelle.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Accueil</a> | 
								<a href="#">A propos</a> |
								<a href="#">Contact</a> |
								<b><a href="#">Se connecter</a></b>
							</p>
						</div>
					</div>

					

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>