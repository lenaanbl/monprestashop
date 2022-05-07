<?php


require('DAO/DatabaseMessageDAO.php');
require('DAO/DatabaseUserDAO.php');
require('DAO/DatabaseProduitsDAO.php');
require('DAO/DatabaseCategoriesDAO.php');

class ControllerAdmin
{
	public static function includeView($admin_page)
	{
		if ($admin_page == "admin_messages")
		{
			require_once('view_admin_messages.php');
		}
		elseif ($admin_page == "user_ban")
		{
			require_once('userban.php');
		}
		elseif ($admin_page == "admin_produit")
		{
			require_once('produits.php');
		}
		elseif ($admin_page == "admin_categorie")
		{
			require_once('view_admin_categorie.php');
		}
		elseif ($admin_page == "admin")
		{
			require_once('view_admin.php');
		}
	}

	
	public static function get_all_contact()
	{
		$tab_contact = MessagesDAO::getAllMessages();
		return $tab_contact;
	}

	//en rapport avec les clients
	public static function getNomClient($id)
	{
		$nom = UserDAO::getUserById($id);
		$nom = $nom->getPseudo();
		return $nom;
	}
	public static function getAllClient()
	{
		$tab_client = UserDAO::getAllUser();
		return $tab_client;
	}
	public static function ban_user_by_pseudo($pseudo)
	{
		UserDAO::banUserByPseudo($pseudo);
	}
	public static function deban_user_by_pseudo($pseudo)
	{
		UserDAO::debanUserByPseudo($pseudo);
	}

	// en rapport avec les produits
	public static function get_all_produit()
	{
		$tab_produit = ProduitDAO::getAllProduits();
		return $tab_produit;
	}
	public static function update_produit($content, $value, $id)
	{
		$update = ProduitDAO::updateProduit($content, $value, $id);
		return $update;
	}
	public static function delete_produit($id_produit)
	{
		ProduitDAO::deleteProduit($id_produit);
		
	}
	public static function create_produit($nom, $description, $quantite, $prix, $photo, $id_cat)
	{
		$crea = ProduitDAO::insertProduit($nom, $description, $quantite, $prix, $photo, $id_cat);
		return $crea;
	}

	// en rapport avec les catégories
	public static function get_all_cat()
	{
		$tab_cat = CategoryDAO::getAllCat();
		return $tab_cat;
	}
	public static function update_cat($nom, $id_cat)
	{
		$update = CategoryDAO::updateCat($nom, $id_cat);
	}
	public static function delete_cat($id_cat)
	{
		$delete = CategoryDAO::deleteCat($id_cat);
	}
	public static function crea_cat($nom_cat_new)
	{
		$crea = CategoryDAO::insertCat($nom_cat_new);
	}

	public static function redirectUser($page)
	{
		header('Location: index.php?page=' . $page);
	}
	
}


?>