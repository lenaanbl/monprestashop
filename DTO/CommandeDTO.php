<?php


class CommandeDTO
{
    private $id_commande;
    private $nb_produits;
    private $montant;
    private $date_commande;
    private $id_client;


    public function __construct($nb_produits, $montant, $date_commande, $id_client)
    {
        $this->nb_produits = $nb_produits;
        $this->montant = $montant;
        $this->date_commande = $date_commande;
        $this->id_client = $id_client;
    }


    public function getIdCommande()
    {
        return $this->id_commande;
    }


    public function setIdCommande($id_commande): void
    {
        $this->id_commande = $id_commande;
    }


    public function getNbProduits()
    {
        return $this->nb_produits;
    }


    public function setNbProduits($nb_produits): void
    {
        $this->nb_produits = $nb_produits;
    }


    public function getMontant()
    {
        return $this->montant;
    }


    public function setMontant($montant): void
    {
        $this->montant = $montant;
    }


    public function getDateCommande()
    {
        return $this->date_commande;
    }


    public function setDateCommande($date_commande): void
    {
        $this->date_commande = $date_commande;
    }


    public function getIdClient()
    {
        return $this->id_client;
    }


    public function setIdClient($id_client): void
    {
        $this->id_client = $id_client;
    }


}