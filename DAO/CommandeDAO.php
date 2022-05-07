<?php

//parti peixuan

class CommandeDAO{
    public static function getTrisorie(){
        $connexionbdd = DatabaseLinker::getConnexion();
        $state = $connexionbdd->prepare('SELECT sum(montant) from commandes');
        $state->execute();
        $result = $state->fetchall();
        $trisorie=null;
        foreach($result as $value){
            $trisorie+=$value;
        }
        return intval($trisorie);
    }
}