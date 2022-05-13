<?php

class CommandeDTO
{
	private $id_commande;
	private $id_client;
	private $id_produit;
	private $date;
	private $quantite;


	

	/**
	 * Get the value of id_commande
	 */ 
	public function getId_commande()
	{
		return $this->id_commande;
	}

	/**
	 * Set the value of id_commande
	 *
	 * @return  self
	 */ 
	public function setId_commande($id_commande)
	{
		$this->id_commande = $id_commande;

		return $this;
	}

	/**
	 * Get the value of id_client
	 */ 
	public function getId_client()
	{
		return $this->id_client;
	}

	/**
	 * Set the value of id_client
	 *
	 * @return  self
	 */ 
	public function setId_client($id_client)
	{
		$this->id_client = $id_client;

		return $this;
	}

	/**
	 * Get the value of id_produit
	 */ 
	public function getId_produit()
	{
		return $this->id_produit;
	}

	/**
	 * Set the value of id_produit
	 *
	 * @return  self
	 */ 
	public function setId_produit($id_produit)
	{
		$this->id_produit = $id_produit;

		return $this;
	}

	/**
	 * Get the value of date
	 */ 
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * Set the value of date
	 *
	 * @return  self
	 */ 
	public function setDate($date)
	{
		$this->date = $date;

		return $this;
	}

	/**
	 * Get the value of quantite
	 */ 
	public function getQuantite()
	{
		return $this->quantite;
	}

	/**
	 * Set the value of quantite
	 *
	 * @return  self
	 */ 
	public function setQuantite($quantite)
	{
		$this->quantite = $quantite;

		return $this;
	}
}
?>
