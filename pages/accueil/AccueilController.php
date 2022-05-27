<?php

	

	class AccueilController
	{
		public function __construct() { }
		 
	

		public function includeView()
		{		
			require_once 'tools/header.php';
			include_once('accueil.php');
			include_once 'tools/footer.html'; 
		}
	}

?>