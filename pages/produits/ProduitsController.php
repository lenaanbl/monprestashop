<?php

include_once("DAO/DatabaseProduitsDAO.php");
	include_once("DAO/DatabaseCategoriesDAO.php");

class ProduitsController
{
	public static function includeView()
	{
		require_once('tools/header.php');
		require_once('produit.php');
	
	}

	public static function redirectUser()
	{
		header('Location: index.php?page=panier');
	}
	public static function redirectUserAccueil()
	{
		header('Location: index.php?page=accueil');
	}

	public static function getProduits()
		{
			$produit = ProduitDAO::getAllProduits();
			return $produit;
		}
		
		public static function getCategorie(){
			$categorie[] = DatabaseCategorieDAO::getAllCat();
			return $categorie;
		}


	//Le panier possede l'id du produit dans la premiere colonne, et la quantite dans la seconde
	public static function get_last_index()
	{
		$cpt = 0;
		if (!isset($_SESSION['panier']))
		{
			$_SESSION["panier"] = array();
		}
		foreach ($_SESSION['panier'] as $ligne)
		{
			$cpt = $cpt + 1;
		}
		return $cpt;
	}

	public static function add_produit_panier($id_produit, $quantite)
	{
		if (!isset($_SESSION['panier']))
		{
			$_SESSION["panier"] = array();
		}
		$last_index = self::get_last_index();
		$_SESSION['panier'][$last_index] = array($id_produit, $quantite);
	}

}

?>