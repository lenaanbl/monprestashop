<?php

	
	class DeconnexionController
	{
		public function deconnectUser()
		{			
			session_destroy();
		}

		public function includeView(){
			include_once("deconnexion.php");
		}

	}

?>
