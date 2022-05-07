<?php 

	if (empty($_SESSION))
	{
		session_name("prestachope1");
		session_start();
	}
	
	date_default_timezone_set('Europe/Paris');

	include_once("tools/DatabaseLinker.php");
	include_once("tools/Rooter.php");
?>



<?php

	include_once('tools/header.php');

	include_once("tools/SuperController.php");
		
	if(!empty($_GET['page'])) 
	{
		$page = $_GET['page'];
	}
	else
	{
		$page = "accueil";
	}

	
	SuperController::callPage($page);
	
?>		

	
	<?php include_once('tools/footer.html'); ?>
