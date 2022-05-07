<?php


class DatabaseCategorieDTO
{
    private $id_categorie;
    private $nom;


    /*public function __construct($nom)
    {
        $this->nom = $nom;
    }*/


    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    public function getNomCategorie()
    {
        return $this->nom;
    }


    public function setNomCategorie($nom)
    {
        $this->nom = $nom;
    }

}