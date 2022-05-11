<?php

    include_once ('tools/DataBaseLinker.php');

    include_once('DTO/DatabaseProduitsDTO.php');

class ProduitDAO{


    public static function getProduits(){       

        $connex = DatabaseLinker::getConnexion();

        $state = $connex->prepare("SELECT * FROM produits");
        $state->execute();

        $resultats = $state->fetchAll();

        return $resultats;
    }
   

    public static function getAllProduits(){


        
        $connex = DatabaseLinker::getConnexion();
        $state = $connex->prepare('SELECT * FROM produits WHERE id_categorie=1');
        $state->execute();
        $resultats = $state->fetchAll();
        $tab_produit = [];

        if(empty($resultats)){
            
            $tab_produit = null;
        }

        else{

            foreach ($resultats as $value){
                $produit = new ProduitDTO();
                $produit->setIdProduit($value['id_produit']);
                $produit->setNomProduit($value['nom']);
                $produit->setDescription($value['description']);
                $produit->setPrix($value['prix']);
                $produit->setQuantite($value['quantite']);
                $produit->setPathPhoto($value['picture']);
                $produit->setIdCategorie($value['id_categorie']);
                $tab_produit[] = $produit;
            }
        }

        return $tab_produit;
    }


    public static function getProduitById($id){

        $connex = DatabaseLinker::getConnexion();
        $state = $connex->prepare("SELECT * FROM produits WHERE id_produit = ?");
        $state->bindParam(1, $id);
        $state->execute();
        $produit = new ProduitDTO();
        $value = $state->fetch();

        if (empty($value)) 
            {
                $produit = null;
            }
        else
        {
            $produit->setIdProduit($value['id_produit']);
            $produit->setNomProduit($value['nom']);
            $produit->setDescription($value['description']);
            $produit->setPrix($value['prix']);
            $produit->setQuantite($value['quantite']);
            $produit->setPathPhoto($value['picture']);
            $produit->setIdCategorie($value['id_categorie']);

        }

        return $produit;
    }

    public static function getProduitsByVoyage()
    {

        $connex = DatabaseLinker::getConnexion();
        $state = $connex->prepare('SELECT * FROM produits WHERE id_categorie=2');
        
        $state->execute();
        $resultats = $state->fetchAll();
        $tab_produit = [];

        if(empty($resultats)){
            
            $tab_produit = null;
        }

        else{

            foreach ($resultats as $value){
                $produit = new ProduitDTO();
                $produit->setIdProduit($value['id_produit']);
                $produit->setNomProduit($value['nom']);
                $produit->setDescription($value['description']);
                $produit->setPrix($value['prix']);
                $produit->setQuantite($value['quantite']);
                $produit->setPathPhoto($value['picture']);
                $produit->setIdCategorie($value['id_categorie']);
                $tab_produit[] = $produit;
            }
        }

        return $tab_produit;
    }

   
    public static function deleteProduit($id_produit){

        $connex = DatabaseLinker::getConnexion();

        $state=$connex->prepare('DELETE FROM produits WHERE id_produit=?');
        $state->bindParam(1, $id_produit);
        $state->execute();
    }

    public static function updateProduit($content, $value, $id)
    {
        $connex = DatabaseLinker::getConnexion();
        $state = $connex->prepare("UPDATE produits SET $value = ? WHERE id_produit = ?");
        $state->bindParam(1, $content);
        $state->bindParam(2, $id);
        $state->execute();
    }


    public static function insertProduit($nom, $description, $quantite, $prix, $photo, $id_cat)
    {
        $connex = DatabaseLinker::getConnexion();
        $state = $connex->prepare("INSERT into produits (nom, description, quantite, prix, picture, id_categorie) VALUES (?, ?, ?, ?, ?, ?)");
        $state->bindParam(1, $nom);
        $state->bindParam(2, $description);
        $state->bindParam(3, $quantite);
        $state->bindParam(4, $prix);
        $state->bindParam(5, $photo);
        $state->bindParam(6, $id_cat);
        $state->execute();
    }

}