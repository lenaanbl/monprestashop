<?php

	
	class DeconnexionController
	{
		public function deconnectUser()
		{			
			session_destroy();
		}

		public function includeView(){
			require_once 'tools/header.php';
			include_once("deconnexion.php");
		}

	}

?>
