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
<!-- Menu -->
	<body>
		<?php
			function echoActiveClassIfRequestMatches($requestUri)
			{
				$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

				if ($current_file_name == $requestUri)
					echo 'class="active"';
			}
		?>
		<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php?page=AccueilPrivee">Development Company</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?php echoActiveClassIfRequestMatches("index.php?page=AccueilPrivee");?>>
							<a href="index.php?page=AccueilPrivee">Accueil</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches("index.php?page=Planning");?>><a href="index.php?page=Planning">Planning</a></li>
						<li <?php 
						echoActiveClassIfRequestMatches("index.php?page=Conge");
						echoActiveClassIfRequestMatches("index.php?page=Formation");
						?> class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Demande <b class="caret"></b></a>
							 <ul class="dropdown-menu">
								<li <?php echoActiveClassIfRequestMatches("index.php?page=Conge");?>><a href="index.php?page=Conge">Congé</a></li>
								<li <?php echoActiveClassIfRequestMatches("index.php?page=Formation");?>><a href="index.php?page=Formation">Formation</a></li>
							 </ul>
						</li>
					</ul>
					<ul class ="nav navbar-nav navbar-right">
						<li>Votre identifiant : <?php echo $_SESSION['idSalarie'];?></li>
						<li>
							<a href="vues/privee/sessionDestroy.php">Déconnexion</a>
						</li>
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