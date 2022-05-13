<?php

require_once 'tools/DatabaseLinker.php';
require_once 'DTO/DatabaseCommandeDTO.php';


class CommandeDAO
{


    public static function createCommande($prix_commande)
    {
        $connex = DatabaseLinker::getConnexion();

        $id_client = $_SESSION['id_client'];
        $cpt = 0;
        foreach ($_SESSION['panier'] as $ligne)
        {
            
            if ($cpt == 0)
            {
                $id = $ligne[0];
                settype($id, "string");
                $all_id = $id;

                $quantite = $ligne[1];
                settype($quantite, "string");
                $all_quantite = $quantite;

                $cpt = $cpt + 1;
            }
            else
            {
            
            $id = $ligne[0];
            settype($id, "string");
            $all_id .= " / ".$id;

            $quantite = $ligne[1];
            settype($quantite, "string");
            $all_quantite .= " / ".$quantite;
            }
        }

        $state = $connex->prepare("INSERT into commande (id_client, id_produit, prixtotal, date, quantite) VALUES (?, ?, ?,CURRENT_TIMESTAMP, ?)");
        $state->bindParam(1, $id_client);
        $state->bindParam(2, $all_id);
        $state->bindParam(3, $prix_commande);
        $state->bindParam(4, $all_quantite);
        $state->execute();
    }



   

}
