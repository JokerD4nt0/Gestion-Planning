<?php
	Session_start();
	
	if(!isset($_SESSION["emailSalarie"]))
	{
		header("Location:../index.php?erreur=ok");
	}
	if (!empty($_GET['page']) && is_file('controleurs/Cnt'.$_GET['page'].'.php')){
		require_once 'controleurs/Cnt'.$_GET['page'].'.php';
	}
	else{
	require_once 'controleurs/CntIndexPrivee.php';
	}
?>