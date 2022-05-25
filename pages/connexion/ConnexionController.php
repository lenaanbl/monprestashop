<?php

	include_once("DAO/DatabaseUserDAO.php");

	class ConnexionController
	{
		public function __construct() 
		{
		}
	
		public function includeViewConnexion()
		{
			require_once 'tools/header.php';
			include_once('pages/connexion/login.php');
			
		}

		public function redirectUser(){
			header('Location: index.php?page=accueil');
		}

		public static function authenticate($email, $password){

			$isClient = false;
			$client = UserDAO::getUserWithEmailPassword($email, $password);


			if($client != null){

				if ($client->getIsBan() == 1)
				{
					$_SESSION['is_ban'] = true;
					echo "CLIENT BAN";
				}

				if($client->getAdmin() == 0)
				{
					$_SESSION["id_client"] = $client->getIdClient();
					$_SESSION["panier"] = array();

					$admin = UserDAO::getAdmin($_SESSION["id_client"]);
					if ($admin->getAdmin() == 1)
					{
						$_SESSION["is_admin"] = $client->getAdmin();
					}
				}


			$isClient = true;

	

				
			}

			return $isClient;
		}


		public static function isBan($id)
		{
			$bool = false;

			$user = UserDAO::getUserById($id);
			$is_ban = $user->getIsBan();
			if ($is_ban == 1)
			{
				$bool = true;
			}
			return $bool;
		}

		public static function redirectUser_ban()
	{
		header('Location: index.php?page=connexion&error=ban');
	}

	public static function redirectUser_syntaxe()
	{
		header('Location: index.php?page=connexion&error=syntaxe');
	}
		
	}

?>