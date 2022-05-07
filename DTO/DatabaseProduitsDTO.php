<?php

    class ProduitDTO
    {
        private $id_produit;
        private $nom;
        private $description;
        private $quantite;
        private $picture;
        private $prix;
        private $id_categorie;


        public function getPathPhoto(){
            return $this->picture;
        }

        
        public function setPathPhoto($photo){
            $this->picture = $photo;
        }

        public function getDescription(){
            return $this -> description;
        }

        public function setDescription($desc){
            $this ->description = $desc;
        }

        public function getIdProduit()
        {
            return $this->id_produit;
        }

        public function setIdProduit($id_produit)
        {
            $this->id_produit = $id_produit;
        }

        public function getNomProduit()
        {
            return $this->nom;
        }

        public function setNomProduit($nom_produit)
        {
            $this->nom = $nom_produit;
        }


        public function getQuantite()
        {
            return $this->quantite;
        }


        public function setQuantite($quantite)
        {
            $this-> quantite = $quantite;
        }


        public function getPrix()
        {
            return $this->prix;
        }

        public function setPrix($prix)
        {
            $this->prix = $prix;
        }

        public function getIdCategorie()
        {
            return $this -> id_categorie;
        }

        public function setIdCategorie($idcat)
        {
            $this -> id_categorie = $idcat;
        }

    }
?>