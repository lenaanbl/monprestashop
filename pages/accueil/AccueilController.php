<?php

	include_once("DAO/DatabaseProduitsDAO.php");
	include_once("DAO/DatabaseCategoriesDAO.php");

	class AccueilController
	{
		public function __construct() { }
		 
		public static function getProduits()
		{
			$produit = ProduitDAO::getAllProduits();
			return $produit;
		}
		
		public static function getCategorie(){
			$categorie[] = DatabaseCategorieDAO::getAllCat();
			return $categorie;
		}

		public function includeView()
		{		
			include_once('accueil.php');
		}
	}

?>