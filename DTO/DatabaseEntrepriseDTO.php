<?php

class EntrepriseDTO
{
	private $id_entreprise;
	private $tresorerie;


	



	/**
	 * Get the value of id_entreprise
	 */ 
	public function getId_entreprise()
	{
		return $this->id_entreprise;
	}

	/**
	 * Set the value of id_entreprise
	 *
	 * @return  self
	 */ 
	public function setId_entreprise($id_entreprise)
	{
		$this->id_entreprise = $id_entreprise;

		return $this;
	}

	/**
	 * Get the value of tresorerie
	 */ 
	public function getTresorerie()
	{
		return $this->tresorerie;
	}

	/**
	 * Set the value of tresorerie
	 *
	 * @return  self
	 */ 
	public function setTresorerie($tresorerie)
	{
		$this->tresorerie = $tresorerie;

		return $this;
	}
}
?>
