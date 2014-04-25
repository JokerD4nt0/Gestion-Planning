<?php
	function connexion()
	{
		$serveur = "localhost";
		$log_connect = "root";
		$pass_connect = "";
		$database = "gestionrh";
		
		$connexion = mysqli_connect($serveur, $log_connect, $pass_connect, $database);
		mysqli_query($connexion,"SET NAME UTF8");
		return($connexion);	
	}
	$connexion = connexion();
?>