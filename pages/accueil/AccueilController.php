<?php

	include_once("DAO/DatabaseProduitsDAO.php");

	class AccueilController
	{
		public function __construct() { }
		 
		public static function getProduits()
		{
			$produit = ProduitDAO::getAllProduits();
			return $produit;
		}
		
		public function includeView()
		{		
			include_once('accueil.php');
		}
	}

?>