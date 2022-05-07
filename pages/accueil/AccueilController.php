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

		public static function getVoyage()
		{
			$produit = ProduitDAO::getProduitsByVoyage();
			return $produit;
		}

		public static function getProdByCat($idcat){
			$prodtab = ProduitDAO::getProduitsByCategorie($idcat);
			return $prodtab;
		}

		public function includeView()
		{		
			include_once('accueil.php');
		}
	}

?>