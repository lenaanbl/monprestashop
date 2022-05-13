<?php

	include_once("DAO/DatabaseUserDAO.php");

	class ProfilController
	{
		private static $id_client;
		
		public function __construct()
		{}
		
		public function includeView()
		{
			require_once 'tools/header.php';
			include_once('profil.php');
		}
		
		public static function setIdClient($id_client)
		{
			ProfilController::$id_client = $id_client;
		}
		
		public static function getUtilisateur($id) 
		{
			return UserDAO::getUserById($id);
		}
		
		public function modif_profil($content, $value, $id)
		{
			UserDAO::modifUser($content, $value, $id);
		}
		
	}
		