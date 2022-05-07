<?php

    include_once('DTO/DatabaseCategorieDTO.php');
    include_once ('tools/DataBaseLinker.php');


    class DatabaseCategorieDAO
    {

        public static function getAllCat(){


            $connexionbdd = DatabaseLinker::getConnexion();

            $state = $connexionbdd -> prepare('SELECT * from categories');
            $state->execute();

            $resultats = $state->fetchAll();
            $tab = [];

            if (empty($resultats)) 
                {
                    $tab = null;
                }
            else
            {
                foreach ($resultats as $value)
                {
                    $cat = new DatabaseCategorieDTO();
                    $cat->setIdCategorie($value['id_categorie']);
                    $cat->setNomCategorie($value['nom']);
                    $tab[] = $cat;
                }
            }
            return $tab;

        }

        public static function updateCat($nom, $id_cat)
        {
            $connex = DatabaseLinker::getConnexion();
            $state = $connex->prepare("UPDATE categories SET nom = ? WHERE id_categorie = ?");
            $state->bindParam(1, $nom);
            $state->bindParam(2, $id_cat);
            $state->execute();
        }
        public static function deleteCat($id_cat)
        {
            $connex = DatabaseLinker::getConnexion();
            $state = $connex->prepare("DELETE FROM categories WHERE id_categorie = ?");
            $state->bindParam(1, $id_cat);
            $state->execute();
        }
        public static function insertCat($nom_cat_new)
        {
            $connex = DatabaseLinker::getConnexion();
            $state = $connex->prepare("INSERT into categories (nom) VALUES (?)");
            $state->bindParam(1, $nom_cat_new);
            $state->execute();
        }
    }

?>