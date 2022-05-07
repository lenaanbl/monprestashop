<?php

	include_once("DAO/DatabaseUserDAO.php");

	class ConnexionController
	{
		public function __construct() 
		{
		}
	
		public function includeViewConnexion()
		{
			include_once('pages/connexion/login.php');
			
		}

		public function includeViewInscription()
		{
			include_once('pages/connexion/inscription.php');
			
		}

		
		
		/*public function authenticate($pseudo, $password)
		{
			$authenticated = false;
			
			$user = UserDAO::getUserWithPseudoPassword($pseudo, $password);
			
			if ($user != null)
			{		
				if ($user->getAdmin())
				{
					$_SESSION["admin"] = true;
				}
				else
				{
					$_SESSION["admin"] = false;
				}
				
				$_SESSION["id_client"] = $user->getIdClient();
				
				
				
				$authenticated = true;
			}
			
			return $authenticated;
		}*/

		public static function authenticate($pseudo, $password)
		{
			$bool = false;

			$client = UserDAO::getUserWithPseudoPassword($pseudo, $password);

			if ($client != null && $client->getIsBan() == 0)
			{


				if ($client->getAdmin())
				{
					$_SESSION["admin"] = true;
				}
				else
				{
					$_SESSION["admin"] = false;
				}
				
				$_SESSION["id_client"] = $client->getIdClient();

				$bool = true;
			}
			
			return $bool;
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

		public function InsertClient($pseudo, $nom, $prenom, $picture, $adresse, $mail, $montant, $password){
			$insert = UserDAO::insert($pseudo, $nom, $prenom, $picture, $adresse, $mail, $montant, $password);
			return $insert;		
		}
	}

?>