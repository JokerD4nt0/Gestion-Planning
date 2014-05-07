<?php
	Session_start();
	
	if(!isset($_SESSION["emailSalarie"]))
	{
		header("Location:index.php?erreur=ok");
	}
?>