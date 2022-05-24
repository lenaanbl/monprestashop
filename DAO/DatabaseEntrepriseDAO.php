<?php

require_once 'tools/DatabaseLinker.php';
require_once 'DTO/DatabaseEntrepriseDTO.php';


class EntrepriseDAO{


    public static function getEntreprise()
    {
        $connex = DatabaseLinker::getConnexion();
        $state = $connex->prepare("SELECT * FROM entreprise");
        $state->execute();
        $ent = new EntrepriseDTO();
        $lineResultat = $state->fetch();

        if (empty($lineResultat)) 
            {
                $ent = null;
            }
        else
        {
            $ent->setId_entreprise($lineResultat['id_entreprise']);
            $ent->setTresorerie($lineResultat['tresorerie']);
            
        }
        return $ent;
    }

    public static function addTresorerie($new_montant)
    {
        $connex = DatabaseLinker::getConnexion();
        $state = $connex->prepare("UPDATE entreprise SET tresorerie = ? WHERE id_entreprise = 1");
        $state->bindParam(1, $new_montant);
        $state->execute();
    }



   

}


