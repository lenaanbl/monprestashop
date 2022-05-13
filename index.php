<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Let's Shopping !</title>		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		
	<?php 

		

		if (empty($_SESSION))
		{
			session_name("prestachope1");
			session_start();
		}
		
		date_default_timezone_set('Europe/Paris');

		require("tools/DatabaseLinker.php");
		DatabaseLinker::getConnexion();

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
	

	<footer>
		<?php include_once('tools/footer.html'); ?>
	</footer>
	

	</body>
</html>