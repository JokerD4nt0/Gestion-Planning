<?php
	Session_start();
	
	
	if(!isset($_SESSION["idSalarie"]))
	{
		header("Location:index.php?erreur=ok");
	}
?>