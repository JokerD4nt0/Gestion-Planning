<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=gestionrh', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $exception)
	{
		die('Erreur : '.$exception->getMessage());
	}
?>