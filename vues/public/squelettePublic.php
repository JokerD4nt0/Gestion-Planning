<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Development Company</title>
		
		<!-- Links -->
			<!-- Favicon -->
			<link rel="shortcut icon" href="favicon.png">
			
			<!-- Bootstrap core CSS -->
			<link href="vues/css/bootstrap.css" rel="stylesheet">
			
			<!-- Custom styles for this template -->
			<link href="vues/css/navbar-fixed-top.css" rel="stylesheet">
			<link href="vues/css/form.css" rel="stylesheet">

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			  <script src="../../assets/js/html5shiv.js"></script>
			  <script src="../../assets/js/respond.min.js"></script>
			<![endif]-->
	</head>
	<body>
	<!-- Fixed navbar -->
		<?php
			function echoActiveClassIfRequestMatches($requestUri)
			{
				$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

				if ($current_file_name == $requestUri)
					echo 'class="active"';
			}
		?>
		<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Development Company</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php echoActiveClassIfRequestMatches("index");?>><a href="index.php">Accueil</a></li>
				<li <?php echoActiveClassIfRequestMatches("index.php?page=Recrutement");?>><a href="index.php?page=Recrutement">Recrutement</a></li>
				<li <?php echoActiveClassIfRequestMatches("index.php?page=EspaceSalaries");?>><a href="index.php?page=EspaceSalaries">Espace Salariés</a></li>
			</ul>
		</div><!--/.nav-collapse -->
		</div>
		</div>
		<div class="container">
			<h1><?php echo $titre; ?></h1>
			<p><?php echo $contenu; ?></p>
		</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="vues/js/jquery.js"></script>
		<script src="vues/js/bootstrap.min.js"></script>
	</body>
	<footer>
		<hr/>
		<div class="container">
			<p>Copyright 2013-2014 © Development Company, Tous droits réservés.</p>
		</div>
	</footer>
</html>